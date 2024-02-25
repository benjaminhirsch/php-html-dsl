<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum Capture: string
{
    case USER        = 'user';
    case ENVIRONMENT = 'environment';
}
