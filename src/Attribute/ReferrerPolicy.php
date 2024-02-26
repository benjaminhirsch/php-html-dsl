<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;

final readonly class ReferrerPolicy extends Attribute
{
    public function __construct(Value\ReferrerPolicy $referrerPolicy)
    {
        parent::__construct($referrerPolicy->value);
    }

    #[Override]
    public function name(): string
    {
        return 'referrerpolicy';
    }
}
