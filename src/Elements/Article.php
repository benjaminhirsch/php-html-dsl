<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Elements;

use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Type;
use Override;

final class Article extends Node
{
    #[Override]
    public function name(): string
    {
        return 'article';
    }

    #[Override]
    public function getType(): Type
    {
        return Type::ELEMENT;
    }
}
