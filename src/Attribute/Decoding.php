<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;

final readonly class Decoding extends Attribute
{
    public function __construct(Value\Decoding $decoding)
    {
        parent::__construct($decoding->value);
    }

    #[Override]
    public function name(): string
    {
        return 'decoding';
    }
}
