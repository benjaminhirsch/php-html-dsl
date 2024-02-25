<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum Loading: string
{
    case EAGER = 'eager';
    case LAZY  = 'lazy';
}
