<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use Override;

final readonly class Translate extends Attribute implements GlobalAttribute
{
    public function __construct(Value\Translate $translate)
    {
        parent::__construct($translate->value);
    }

    #[Override]
    public function name(): string
    {
        return 'translate';
    }
}
