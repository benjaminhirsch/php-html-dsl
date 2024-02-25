<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum Autocomplete: string
{
    case ON               = 'on';
    case NAME             = 'name';
    case HONORIFIC_PREFIX = 'honorific-prefix';
    case GIVEN_NAME       = 'given-name';
    case ADDITIONAL_NAME  = 'additional-name';
    case FAMILY_NAME      = 'family-name';
    case HONORIFIC_SUFFIX = 'honorific-suffix';
    case NICKNAME         = 'nickname';
    case EMAIL            = 'email';
    case USERNAME         = 'username';
}
