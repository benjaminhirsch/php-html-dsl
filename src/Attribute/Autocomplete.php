<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;

final readonly class Autocomplete extends Attribute
{
    public function __construct(Value\Autocomplete $autocomplete)
    {
        parent::__construct($autocomplete->value);
    }

    #[Override]
    public function name(): string
    {
        return 'autocomplete';
    }
}
