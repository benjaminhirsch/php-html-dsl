<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;

final readonly class Capture extends Attribute
{
    public function __construct(Value\Capture $capture)
    {
        parent::__construct($capture->value);
    }

    #[Override]
    public function name(): string
    {
        return 'capture';
    }
}
