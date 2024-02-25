<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Node;
use Override;

final class BlockQuote extends Node
{
    #[Override]
    public function name(): string
    {
        return 'blockquote';
    }
}
