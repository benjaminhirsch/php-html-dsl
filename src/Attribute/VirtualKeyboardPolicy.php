<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class VirtualKeyboardPolicy extends Attribute implements GlobalAttribute
{
    public function __construct(Value\VirtualKeyboardPolicy $virtualKeyboardPolicy)
    {
        parent::__construct($virtualKeyboardPolicy->value);
    }

    #[Override]
    public function name(): string
    {
        return 'virtualkeyboardpolicy';
    }
}
