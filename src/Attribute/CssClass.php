<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IGlobalAttribute;
use Override;

final readonly class CssClass extends Attribute implements IGlobalAttribute
{
    #[Override]
    public function name(): string
    {
        return 'class';
    }
}
