<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Type;
use Override;

final class IdiomaticText extends Node
{
    #[Override]
    public function name(): string
    {
        return 'i';
    }

    #[Override]
    public function getType(): Type
    {
        return Type::ELEMENT;
    }
}