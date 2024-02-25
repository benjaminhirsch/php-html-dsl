<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\IVoidElement;
use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Type;
use Override;

final class LineBreak extends Node implements IVoidElement
{
    #[Override]
    public function name(): string
    {
        return 'br';
    }

    #[Override]
    public function getType(): Type
    {
        return Type::ELEMENT;
    }
}
