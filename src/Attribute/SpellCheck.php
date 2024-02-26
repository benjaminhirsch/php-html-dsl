<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class SpellCheck extends Attribute implements GlobalAttribute
{
    public function __construct(Value\SpellCheck $spellCheck)
    {
        parent::__construct($spellCheck->value);
    }

    #[Override]
    public function name(): string
    {
        return 'spellcheck';
    }
}
