<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Specific;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Sandbox extends Attribute
{
    public function __construct(Attribute\Value\Sandbox $sandbox)
    {
        parent::__construct($sandbox->value);
    }

    #[Override]
    public function name(): string
    {
        return 'sandbox';
    }
}
