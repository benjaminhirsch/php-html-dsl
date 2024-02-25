<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class VirtualKeyboardPolicy extends Attribute
{
    public function __construct(Attribute\Value\VirtualKeyboardPolicy $virtualKeyboardPolicy)
    {
        parent::__construct($virtualKeyboardPolicy->value);
    }

    #[Override]
    public function name(): string
    {
        return 'virtualkeyboardpolicy';
    }
}
