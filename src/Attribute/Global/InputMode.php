<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class InputMode extends Attribute
{
    #[Override]
    public function name(): string
    {
        return 'inputmode';
    }
}
