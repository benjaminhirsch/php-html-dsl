<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class Hidden extends Attribute implements GlobalAttribute
{
    public function __construct(Value\Hidden $hidden)
    {
        parent::__construct($hidden->value);
    }

    #[Override]
    public function name(): string
    {
        return 'hidden';
    }
}
