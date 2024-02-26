<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use Override;

final class Heading6 extends Element
{
    #[Override]
    public function name(): string
    {
        return 'h6';
    }
}
