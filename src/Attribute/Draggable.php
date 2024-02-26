<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class Draggable extends Attribute implements GlobalAttribute
{
    public function __construct(Value\Draggable $draggable)
    {
        parent::__construct($draggable->value);
    }

    #[Override]
    public function name(): string
    {
        return 'draggable';
    }
}
