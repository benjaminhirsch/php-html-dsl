<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum FormTarget: string
{
    case  SELF   = '_self';
    case  BLANK  = '_blank';
    case  PARENT = '_parent';
    case  TOP    = '_top';
}
