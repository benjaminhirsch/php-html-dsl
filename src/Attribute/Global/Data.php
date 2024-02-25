<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Data extends Attribute
{
    public function __construct(private string $name, string $value)
    {
        parent::__construct($value);
    }

    #[Override]
    public function name(): string
    {
        return 'data-' . $this->name;
    }
}
