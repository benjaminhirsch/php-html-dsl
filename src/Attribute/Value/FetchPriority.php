<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum FetchPriority: string
{
    case HIGH = 'high';
    case LOW  = 'log';
    case AUTO = 'auto';
}
