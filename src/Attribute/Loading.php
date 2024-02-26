<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Loading extends Attribute
{
    public function __construct(Attribute\Value\Loading $loading)
    {
        parent::__construct($loading->value);
    }

    #[Override]
    public function name(): string
    {
        return 'loading';
    }
}
