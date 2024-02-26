<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class FormEncoding extends Attribute
{
    public function __construct(Attribute\Value\FormEncoding $encoding)
    {
        parent::__construct($encoding->value);
    }

    #[Override]
    public function name(): string
    {
        return 'formenctype';
    }
}
