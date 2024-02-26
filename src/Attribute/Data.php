<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IGlobalAttribute;
use Override;

final readonly class Data extends Attribute implements IGlobalAttribute
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
