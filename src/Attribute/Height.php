<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;

final readonly class Height extends Attribute
{
    #[Override]
    public function name(): string
    {
        return 'height';
    }
}
