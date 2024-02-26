<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IGlobalAttribute;
use Override;

final readonly class Popover extends Attribute implements IGlobalAttribute
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