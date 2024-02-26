<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Node;
use Override;

final class Source extends Node
{
    #[Override]
    public function name(): string
    {
        return 'source';
    }
}
