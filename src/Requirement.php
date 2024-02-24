<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html;

enum Requirement
{
    case ALL;
    case AT_LEAST_ONE;

    public function exceptionMessage(): string
    {
        return match ($this) {
            self::ALL => 'all',
            self::AT_LEAST_ONE => 'at least one',
        };
    }
}
