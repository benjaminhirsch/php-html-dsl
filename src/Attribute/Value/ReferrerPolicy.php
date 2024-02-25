<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum ReferrerPolicy: string
{
     case NO_REFERRER                     = 'no-referrer';
     case NO_REFERRER_WHEN_DOWNGRADE      = 'no-referrer-when-downgrade';
     case ORIGIN                          = 'origin';
     case ORIGIN_WHEN_CROSS_ORIGIN        = 'origin-when-cross-origin';
     case SAME_ORIGIN                     = 'same-origin';
     case STRICT_ORIGIN                   = 'strict-origin';
     case STRICT_ORIGIN_WHEN_CROSS_ORIGIN = 'strict-origin-when-cross-origin';
     case UNSAFE_URL                      = 'unsafe-url';
}
