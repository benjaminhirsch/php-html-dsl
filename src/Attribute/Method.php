<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Method extends Attribute
{
    public function __construct(Attribute\Value\FormMethod $formMethod)
    {
        parent::__construct($formMethod->value);
    }

    #[Override]
    public function name(): string
    {
        return 'method';
    }
}
