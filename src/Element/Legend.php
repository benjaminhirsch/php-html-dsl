<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use Override;

final class Legend extends Element
{
    #[Override]
    public function name(): string
    {
        return 'legend';
    }
}
