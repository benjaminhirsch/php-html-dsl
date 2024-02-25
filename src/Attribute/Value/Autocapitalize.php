<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum Autocapitalize: string
{
    case NONE       = 'none';
    case SENTENCES  = 'sentences';
    case WORDS      = 'words';
    case CHARACTERS = 'characters';
}
