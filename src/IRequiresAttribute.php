<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html;

interface IRequiresAttribute
{
    /**
     * Must return an array with full qualified namespaces
     *
     * @return string[]
     */
    public function requires(): array;

    public function typeOfRequirement(): Requirement;
}
