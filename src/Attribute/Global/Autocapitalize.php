<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\Attribute\Value;
use Override;

final readonly class Autocapitalize extends Attribute
{
    public function __construct(Value\Autocapitalize $autocapitalize)
    {
        parent::__construct($autocapitalize->value);
    }

    #[Override]
    public function name(): string
    {
        return 'autocapitalize';
    }
}
