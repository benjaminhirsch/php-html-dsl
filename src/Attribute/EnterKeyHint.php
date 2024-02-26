<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IGlobalAttribute;
use Override;

final readonly class EnterKeyHint extends Attribute implements IGlobalAttribute
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
