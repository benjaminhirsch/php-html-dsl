<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use Override;

final class Heading5 extends Element
{
    #[Override]
    public function name(): string
    {
        return 'h5';
    }
}
