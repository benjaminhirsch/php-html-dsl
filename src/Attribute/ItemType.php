<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\GlobalAttribute;
use BenjaminHirsch\Html\Requirement;
use BenjaminHirsch\Html\RequiresAttribute;
use Override;

final readonly class ItemType extends Attribute implements RequiresAttribute, GlobalAttribute
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
