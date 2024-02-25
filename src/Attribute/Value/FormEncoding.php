<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum FormEncoding: string
{
    case URL_ENCODED = 'application/x-www-form-urlencoded';
    case FORM_DATA   = 'multipart/form-data';
    case TEXT_PLAIN  = 'text/plain';
}
