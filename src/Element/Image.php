<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Attribute\Specific\Source;
use BenjaminHirsch\Html\IRequiresAttribute;
use BenjaminHirsch\Html\IVoidElement;
use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Requirement;
use Override;

final class Image extends Node implements IVoidElement, IRequiresAttribute
{
    #[Override]
    public function name(): string
    {
        return 'img';
    }

    /** @inheritDoc */
    #[Override]
    public function requires(): array
    {
        return [Source::class];
    }

    #[Override]
    public function typeOfRequirement(): Requirement
    {
        return Requirement::ALL;
    }
}
