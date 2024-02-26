<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use Override;

final class Small extends Element
{
    #[Override]
    public function name(): string
    {
        return 'small';
    }
}
