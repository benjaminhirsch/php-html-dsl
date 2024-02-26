<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use Override;

final class UnorderedList extends Element
{
    #[Override]
    public function name(): string
    {
        return 'ul';
    }
}
