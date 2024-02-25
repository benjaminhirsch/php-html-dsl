<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Type;
use Override;

final class BringAttention extends Node
{
    #[Override]
    public function name(): string
    {
        return 'b';
    }

    #[Override]
    public function getType(): Type
    {
        return Type::ELEMENT;
    }
}
