<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class EnterKeyHint extends Attribute implements GlobalAttribute
{
    public function __construct(Value\EnterKeyHint $enterKeyHint)
    {
        parent::__construct($enterKeyHint->value);
    }

    #[Override]
    public function name(): string
    {
        return 'enterkeyhint';
    }
}
