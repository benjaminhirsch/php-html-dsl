<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html;

use Override;

use function sprintf;

abstract readonly class Attribute implements IAttribute
{
    public function __construct(public string $value)
    {
    }

    #[Override]
    public function render(): string
    {
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
}
