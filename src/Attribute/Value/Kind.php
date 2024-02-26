<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum Kind: string
{
     case SUBTITLES    = 'subtitles';
     case CAPTIONS     = 'captions';
     case DESCRIPTIONS = 'descriptions';
     case CHAPTERS     = 'chapters';
     case METADATA     = 'metadata';
}
