<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Value;

enum ScriptType: string
{
     case IMPORT_MAP = 'importmap';
     case MODULE     = 'module';
}
