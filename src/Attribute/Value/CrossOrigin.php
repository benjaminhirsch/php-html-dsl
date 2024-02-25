<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum CrossOrigin: string
{
     case ANONYMOUS       = 'anonymous';
     case USE_CREDENTIALS = 'use-credentials';
}
