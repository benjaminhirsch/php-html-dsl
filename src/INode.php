<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html;

interface INode
{
    public function name(): string;

    public function render(): string;

    public function getType(): Type;

    public function if(callable|bool $condition): INode;
}
