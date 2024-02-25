<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum FormMethod: string
{
    case POST   = 'post';
    case GET    = 'get';
    case DIALOG = 'dialog';
}
