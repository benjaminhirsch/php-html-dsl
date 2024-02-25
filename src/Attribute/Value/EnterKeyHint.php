<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum EnterKeyHint: string
{
    case ENTER    = 'enter';
    case DONE     = 'done';
    case GO       = 'go';
    case NEXT     = 'next';
    case PREVIOUS = 'previous';
    case SEARCH   = 'search';
    case SEND     = 'send';
}
