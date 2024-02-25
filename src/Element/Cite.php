<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Type;
use Override;

final class Cite extends Node
{
    #[Override]
    public function name(): string
    {
        return 'cite';
    }

    #[Override]
    public function getType(): Type
    {
        return Type::ELEMENT;
    }
}
