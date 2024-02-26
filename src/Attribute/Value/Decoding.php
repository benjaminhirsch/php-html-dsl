<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum Decoding: string
{
    case SYNC  = 'sync';
    case ASYNC = 'async';
    case AUTO  = 'auto';
}
