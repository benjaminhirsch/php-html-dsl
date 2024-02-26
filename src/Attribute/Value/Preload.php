<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum Preload: string
{
    case NONE     = 'none';
    case METADATA = 'metadata';
    case AUTO     = 'auto';
}
