<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\IVoidElement;
use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Type;
use Override;

final class Area extends Node implements IVoidElement
{
    #[Override]
    public function name(): string
    {
        return 'area';
    }

    #[Override]
    public function getType(): Type
    {
        return Type::ELEMENT;
    }
}
