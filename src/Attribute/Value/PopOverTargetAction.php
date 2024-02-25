<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum PopOverTargetAction: string
{
    case HIDE   = 'hide';
    case SHOW   = 'show';
    case TOGGLE = 'toggle';
}
