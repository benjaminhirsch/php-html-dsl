<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IRequiresAttribute;
use BenjaminHirsch\Html\Requirement;
use Override;

final readonly class ItemRef extends Attribute implements IRequiresAttribute
{
    #[Override]
    public function name(): string
    {
        return 'itemref';
    }

    /** @inheritDoc */
    #[Override]
    public function requires(): array
    {
        return [
            ItemScope::class,
        ];
    }

    #[Override]
    public function typeOfRequirement(): Requirement
    {
        return Requirement::ALL;
    }
}