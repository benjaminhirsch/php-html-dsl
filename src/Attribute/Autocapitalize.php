<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IGlobalAttribute;
use Override;

final readonly class Autocapitalize extends Attribute implements IGlobalAttribute
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