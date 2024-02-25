<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum ContentEditable: string
{
    case TRUE           = 'true';
    case FALSE          = 'false';
    case PLAINTEXT_ONLY = 'plaintext-only';
}
