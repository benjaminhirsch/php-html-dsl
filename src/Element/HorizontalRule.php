<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\IVoidElement;
use BenjaminHirsch\Html\Node;
use Override;

final class HorizontalRule extends Node implements IVoidElement
{
    #[Override]
    public function name(): string
    {
        return 'hr';
    }
}
