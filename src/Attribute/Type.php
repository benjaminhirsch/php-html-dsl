<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Type extends Attribute
{
    public function __construct(Value\Type $type)
    {
        parent::__construct($type->value);
    }

    #[Override]
    public function name(): string
    {
        return 'type';
    }
}
