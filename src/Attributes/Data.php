<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use Override;

final class Data extends Attribute
{
    public function __construct(private readonly string $name, string $value)
    {
        parent::__construct($value);
    }

    #[Override]
    public function name(): string
    {
        return 'data-' . $this->name;
    }
}
