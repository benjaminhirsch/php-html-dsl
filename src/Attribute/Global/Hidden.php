<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Hidden extends Attribute
{
    public function __construct(Attribute\Value\Hidden $hidden)
    {
        parent::__construct($hidden->value);
    }

    #[Override]
    public function name(): string
    {
        return 'hidden';
    }
}
