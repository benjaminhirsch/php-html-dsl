<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum InputMode: string
{
    case NONE    = 'none';
    case TEXT    = 'text';
    case DECIMAL = 'decimal';
    case NUMERIC = 'numeric';
    case TEL     = 'tel';
    case SEARCH  = 'search';
    case EMAIL   = 'email';
    case URL     = 'url';
}
