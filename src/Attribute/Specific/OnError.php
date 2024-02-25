<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Specific;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class OnError extends Attribute
{
    #[Override]
    public function name(): string
    {
        return 'onerror';
    }
}
