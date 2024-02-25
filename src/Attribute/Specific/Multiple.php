<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Specific;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IBooleanAttribute;
use Override;

final readonly class Multiple extends Attribute implements IBooleanAttribute
{
    public function __construct()
    {
        parent::__construct('');
    }

    #[Override]
    public function name(): string
    {
        return 'multiple';
    }
}
