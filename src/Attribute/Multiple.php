<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\BooleanAttribute;
use Override;

final readonly class Multiple extends Attribute implements BooleanAttribute
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
