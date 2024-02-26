<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum LinkAs: string
{
    case AUDIO    = 'audio';
    case DOCUMENT = 'document';
    case EMBED    = 'embed';
    case FETCH    = 'fetch';
    case FONT     = 'font';
    case IMAGE    = 'image';
    case OBJECT   = 'object';
    case SCRIPT   = 'script';
    case STYLE    = 'style';
    case TRACK    = 'track';
    case VIDEO    = 'video';
    case WORKER   = 'worker';
}
