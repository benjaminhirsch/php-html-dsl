<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;

use function is_string;

final readonly class FormTarget extends Attribute
{
    public function __construct(Value\FormTarget|string $formTarget)
    {
        parent::__construct(is_string($formTarget) ? $formTarget : $formTarget->value);
    }

    #[Override]
    public function name(): string
    {
        return 'formtarget';
    }
}
