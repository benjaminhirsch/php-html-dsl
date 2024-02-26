<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class Popover extends Attribute implements GlobalAttribute
{
    public function __construct(Value\Popover $popover)
    {
        parent::__construct($popover->value);
    }

    #[Override]
    public function name(): string
    {
        return 'popover';
    }
}
