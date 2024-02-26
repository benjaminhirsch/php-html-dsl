<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use Override;

final class Textarea extends Element
{
    #[Override]
    public function name(): string
    {
        return 'textarea';
    }
}
