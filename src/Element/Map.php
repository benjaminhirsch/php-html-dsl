<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\VoidElement;
use Override;

final class Map extends Element implements VoidElement
{
    #[Override]
    public function name(): string
    {
        return 'map';
    }
}
