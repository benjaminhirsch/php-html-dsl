<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use Override;

final class Target extends Attribute
{
    #[Override]
    public function name(): string
    {
        return 'target';
    }
}
