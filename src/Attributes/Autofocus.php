<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IBooleanAttribute;
use Override;

final class Autofocus extends Attribute implements IBooleanAttribute
{
    public function __construct()
    {
        parent::__construct('');
    }

    #[Override]
    public function name(): string
    {
        return 'autofocus';
    }
}
