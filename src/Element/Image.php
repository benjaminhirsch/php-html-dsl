<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Element;

use BenjaminHirsch\Html\Attribute\Source;
use BenjaminHirsch\Html\Requirement;
use BenjaminHirsch\Html\RequiresAttribute;
use BenjaminHirsch\Html\VoidElement;
use Override;

final class Image extends Element implements VoidElement, RequiresAttribute
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
