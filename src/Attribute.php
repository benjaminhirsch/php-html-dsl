<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html;

interface Attribute
{
    public function name(): string;

    public function value(): string;

    public function render(): string;

    public function getType(): Type;
}
