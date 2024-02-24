<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use Override;

final class Href extends Attribute
{
    #[Override]
    public function name(): string
    {
        return 'href';
    }
}
