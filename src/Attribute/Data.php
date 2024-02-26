<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class Data extends Attribute implements GlobalAttribute
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
