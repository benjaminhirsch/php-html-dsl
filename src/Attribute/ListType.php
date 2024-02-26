<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class ListType extends Attribute
{
    public function __construct(Attribute\Value\ListType $listType)
    {
        parent::__construct($listType->value);
    }

    #[Override]
    public function name(): string
    {
        return 'type';
    }
}
