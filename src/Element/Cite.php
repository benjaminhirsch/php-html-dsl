<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use Override;

final class Cite extends Element
{
    #[Override]
    public function name(): string
    {
        return 'cite';
    }
}
