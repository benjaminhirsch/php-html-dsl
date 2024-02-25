<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Translate extends Attribute
{
    public function __construct(Attribute\Value\Translate $translate)
    {
        parent::__construct($translate->value);
    }

    #[Override]
    public function name(): string
    {
        return 'translate';
    }
}
