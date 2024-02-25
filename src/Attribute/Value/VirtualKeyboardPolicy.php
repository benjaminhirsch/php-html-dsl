<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum VirtualKeyboardPolicy: string
{
    case AUTO   = 'auto';
    case MANUAL = 'manual';
}
