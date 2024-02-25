<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Draggable extends Attribute
{
    public function __construct(Attribute\Value\Draggable $draggable)
    {
        parent::__construct($draggable->value);
    }

    #[Override]
    public function name(): string
    {
        return 'draggable';
    }
}
