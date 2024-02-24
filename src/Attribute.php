<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html;

use Override;
use RuntimeException;

use function assert;
use function implode;
use function in_array;
use function sprintf;

abstract class Attribute implements IAttribute
{
    public function __construct(public string $value)
    {
    }

    #[Override]
    public function render(): string
    {
        if ($this instanceof IPredefinedValues) {
            $this->checkForValidValue();
        }

        if ($this instanceof IBooleanAttribute) {
            return sprintf('%s', $this->name());
        }

        return sprintf('%s="%s"', $this->name(), $this->value());
    }

    #[Override]
    public function getType(): Type
    {
        return Type::ATTRIBUTE;
    }

    #[Override]
    public function value(): string
    {
        return $this->value;
    }

    private function checkForValidValue(): void
    {
        assert($this instanceof IPredefinedValues);

        if (! in_array($this->value(), $this->predefinedValues(), true)) {
            throw new RuntimeException(sprintf(
                'Invalid value `%s` for element %s. Allowed values are: [%s]',
                $this->value,
                static::class,
                implode(', ', $this->predefinedValues()),
            ));
        }
    }
}
