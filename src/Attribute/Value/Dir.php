<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum Dir: string
{
    case LTR  = 'ltr';
    case RTL  = 'rtl';
    case AUTO = 'auto';
}
