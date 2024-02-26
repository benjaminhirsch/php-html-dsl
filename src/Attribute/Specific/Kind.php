<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Specific;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Kind extends Attribute
{
    public function __construct(Attribute\Value\Kind $kind)
    {
        parent::__construct($kind->value);
    }

    #[Override]
    public function name(): string
    {
        return 'kind';
    }
}
