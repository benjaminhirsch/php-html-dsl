<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum Hidden: string
{
    case EMPTY       = '';
    case HIDDEN      = 'hidden';
    case UNTIL_FOUND = 'until-found';
}
