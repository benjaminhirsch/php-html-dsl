<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Type;
use Override;

final class Heading4 extends Node
{
    #[Override]
    public function name(): string
    {
        return 'h4';
    }

    #[Override]
    public function getType(): Type
    {
        return Type::ELEMENT;
    }
}
