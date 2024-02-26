<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html;

interface Element
{
    public function name(): string;

    public function render(): string;

    public function getType(): Type;

    public function if(callable|bool $condition): Element;
}
