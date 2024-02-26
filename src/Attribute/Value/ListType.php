<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum ListType: string
{
    case LOWERCASE_LETTERS        = 'a';
    case UPPERCASE_LETTERS        = 'A';
    case LOWERCASE_ROMAN_NUMERALS = 'i';
    case UPPERCASE_ROMAN_NUMERALS = 'I';
    case NUMBERS                  = '1';
}
