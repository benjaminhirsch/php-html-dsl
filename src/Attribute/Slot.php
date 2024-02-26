<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class Slot extends Attribute implements GlobalAttribute
{
    #[Override]
    public function name(): string
    {
        return 'slot';
    }
}
