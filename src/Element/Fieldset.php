<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use Override;

final class Fieldset extends Element
{
    #[Override]
    public function name(): string
    {
        return 'fieldset';
    }
}
