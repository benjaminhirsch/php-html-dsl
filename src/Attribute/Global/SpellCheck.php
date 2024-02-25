<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class SpellCheck extends Attribute
{
    public function __construct(Attribute\Value\SpellCheck $spellCheck)
    {
        parent::__construct($spellCheck->value);
    }

    #[Override]
    public function name(): string
    {
        return 'spellcheck';
    }
}
