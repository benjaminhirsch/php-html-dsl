<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Attribute as AttributeInterface;
use BenjaminHirsch\Html\Element as ElementInterface;
use BenjaminHirsch\Html\Requirement;
use BenjaminHirsch\Html\RequiresAttribute;
use BenjaminHirsch\Html\Type;
use BenjaminHirsch\Html\VoidElement;
use Override;
use RuntimeException;

use function array_filter;
use function array_intersect;
use function array_map;
use function assert;
use function count;
use function implode;
use function is_callable;
use function is_string;
use function sprintf;

abstract class Element implements ElementInterface
{
    /** @var array<ElementInterface|AttributeInterface|string>  */
    protected readonly array $attributesOrNodes;
    protected bool $shouldBeRendered = true;

    public function __construct(
        ElementInterface|AttributeInterface|string ...$attributesOrNodes,
    ) {
        $this->attributesOrNodes = $attributesOrNodes;
    }

    public function render(): string
    {
        if ($this instanceof RequiresAttribute) {
            $this->fulfillsRequirements();
        }

        if ($this instanceof VoidElement) {
            return sprintf('<%s%s/>', $this->name(), implode('', array_map(
                static fn (AttributeInterface $a) => ' ' . $a->render(),
                $this->getAttributes(),
            )));
        }

        return sprintf(
            '<%s%s>%s</%s>',
            $this->name(),
            implode('', array_map(
                static fn (AttributeInterface $a) => ' ' . $a->render(),
                $this->getAttributes(),
            )),
            implode('', array_map(
                static fn (ElementInterface|string $e) => $e instanceof ElementInterface ? $e->render() : $e,
                $this->getNodes(),
            )),
            $this->name(),
        );
    }

    /** @return ElementInterface[]|string[] */
    private function getNodes(): array
    {
        return array_filter(
            $this->attributesOrNodes,
            static fn (mixed $v) => $v instanceof Element && $v->getType() === Type::ELEMENT &&
                $v->shouldBeRendered || is_string($v),
        );
    }

    /** @return AttributeInterface[] */
    private function getAttributes(): array
    {
        return array_filter(
            $this->attributesOrNodes,
            static fn (mixed $v) => $v instanceof AttributeInterface && $v->getType() === Type::ATTRIBUTE,
        );
    }

    public function if(callable|bool $condition): static
    {
        $this->shouldBeRendered =  is_callable($condition) ? $condition() : $condition;

        return $this;
    }

    private function fulfillsRequirements(): void
    {
        assert($this instanceof RequiresAttribute);
        if (
            ! match ($this->typeOfRequirement()) {
            Requirement::ALL => count(array_intersect(
                array_map(static fn (AttributeInterface $a) => $a::class, $this->getAttributes()),
            )) === count($this->requires()),
            Requirement::AT_LEAST_ONE => count(array_intersect(
                array_map(static fn (AttributeInterface $a) => $a::class, $this->getAttributes()),
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

    #[Override]
    public function getType(): Type
    {
        return Type::ELEMENT;
    }
}
