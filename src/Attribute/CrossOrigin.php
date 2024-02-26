<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class CrossOrigin extends Attribute
{
    public function __construct(Attribute\Value\CrossOrigin $attribute)
    {
        parent::__construct($attribute->value);
    }

    #[Override]
    public function name(): string
    {
        return 'crossorigin';
    }
}
