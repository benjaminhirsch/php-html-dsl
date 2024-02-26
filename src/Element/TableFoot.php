<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use Override;

final class TableFoot extends Element
{
    #[Override]
    public function name(): string
    {
        return 'tfoot';
    }
}
