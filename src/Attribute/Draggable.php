<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IGlobalAttribute;
use Override;

final readonly class Draggable extends Attribute implements IGlobalAttribute
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
