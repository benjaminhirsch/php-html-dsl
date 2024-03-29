<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;

final readonly class FormMethod extends Attribute
{
    public function __construct(Value\FormMethod $formMethod)
    {
        parent::__construct($formMethod->value);
    }

    #[Override]
    public function name(): string
    {
        return 'formmethod';
    }
}
