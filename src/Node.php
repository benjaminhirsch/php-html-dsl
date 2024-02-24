<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html;

use RuntimeException;

use function array_filter;
use function array_intersect;
use function array_map;
use function assert;
use function count;
use function implode;
use function is_callable;
use function is_string;
use function property_exists;
use function sprintf;

abstract class Node implements INode
{
    /** @var array<INode|IAttribute|string>  */
    protected array $attributesOrNodes;
    protected bool $shouldBeRendered = true;

    public function __construct(
        INode|IAttribute|string ...$attributesOrNodes,
    ) {
        $this->attributesOrNodes = $attributesOrNodes;
    }

    public function render(): string
    {
        if ($this instanceof IRequiresAttribute) {
            $this->fulfillsRequirements();
        }

        if ($this instanceof IVoidElement) {
            return sprintf('<%s%s/>', $this->name(), implode('', array_map(
                static fn (IAttribute $a) => ' ' . $a->render(),
                $this->getAttributes(),
            )));
        }

        return sprintf(
            '<%s%s>%s</%s>',
            $this->name(),
            implode('', array_map(
                static fn (IAttribute $a) => ' ' . $a->render(),
                $this->getAttributes(),
            )),
            implode('', array_map(
                static fn (INode|string $e) => $e instanceof INode ? $e->render() : $e,
                $this->getNodes(),
            )),
            $this->name(),
        );
    }

    /** @return INode[]|string[] */
    private function getNodes(): array
    {
        return array_filter(
            $this->attributesOrNodes,
            static fn (mixed $v) => $v instanceof INode && $v->getType() === Type::ELEMENT &&
                property_exists($v, 'shouldBeRendered') && $v->shouldBeRendered || is_string($v),
        );
    }

    /** @return IAttribute[] */
    private function getAttributes(): array
    {
        return array_filter(
            $this->attributesOrNodes,
            static fn (mixed $v) => $v instanceof IAttribute && $v->getType() === Type::ATTRIBUTE,
        );
    }

    public function if(callable|bool $condition): static
    {
        $this->shouldBeRendered =  is_callable($condition) ? $condition() : $condition;

        return $this;
    }

    private function fulfillsRequirements(): void
    {
        assert($this instanceof IRequiresAttribute);
        if (
            ! match ($this->typeOfRequirement()) {
            Requirement::ALL => count(array_intersect(
                array_map(static fn (IAttribute $a) => $a::class, $this->getAttributes()),
            )) === count($this->requires()),
            Requirement::AT_LEAST_ONE => count(array_intersect(
                array_map(static fn (IAttribute $a) => $a::class, $this->getAttributes()),
            )) > 0,
            }
        ) {
            throw new RuntimeException(sprintf(
                'Element %s requires %s of the following attributes: [%s]',
                static::class,
                $this->typeOfRequirement()->exceptionMessage(),
                implode(', ', $this->requires()),
            ));
        }
    }
}
