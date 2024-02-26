<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IGlobalAttribute;
use Override;

final readonly class SpellCheck extends Attribute implements IGlobalAttribute
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
