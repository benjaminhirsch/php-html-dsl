<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html;

interface IPredefinedValues
{
    /** @return string[] */
    public function predefinedValues(): array;
}
