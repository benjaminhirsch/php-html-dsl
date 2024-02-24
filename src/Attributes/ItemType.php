<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attributes;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IRequiresAttribute;
use BenjaminHirsch\Html\Requirement;
use Override;

final class ItemType extends Attribute implements IRequiresAttribute
{
    #[Override]
    public function name(): string
    {
        return 'itemtype';
    }

    /** @inheritDoc */
    #[Override]
    public function requires(): array
    {
        return [
            ItemScope::class,
            self::class,
        ];
    }

    #[Override]
    public function typeOfRequirement(): Requirement
    {
        return Requirement::ALL;
    }
}
