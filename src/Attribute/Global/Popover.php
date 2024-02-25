<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Popover extends Attribute
{
    public function __construct(Attribute\Value\Popover $popover)
    {
        parent::__construct($popover->value);
    }

    #[Override]
    public function name(): string
    {
        return 'popover';
    }
}
