<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class EnterKeyHint extends Attribute
{
    public function __construct(Attribute\Value\EnterKeyHint $enterKeyHint)
    {
        parent::__construct($enterKeyHint->value);
    }

    #[Override]
    public function name(): string
    {
        return 'enterkeyhint';
    }
}
