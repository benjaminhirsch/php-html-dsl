<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum ControlsList: string
{
    case NO_DOWNLOAD        = 'nodownload';
    case NO_FULLSCREEN      = 'nofullscreen';
    case NO_REMOTE_PLAYBACK = 'noremoteplayback';
}
