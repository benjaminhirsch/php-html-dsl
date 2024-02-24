<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Elements;

use BenjaminHirsch\Html\Attributes\Href;
use BenjaminHirsch\Html\Attributes\Target;
use BenjaminHirsch\Html\IRequiresAttribute;
use BenjaminHirsch\Html\IVoidElement;
use BenjaminHirsch\Html\Node;
use BenjaminHirsch\Html\Requirement;
use BenjaminHirsch\Html\Type;
use Override;

final class Base extends Node implements IVoidElement, IRequiresAttribute
{
    #[Override]
    public function name(): string
    {
        return 'base';
    }

    #[Override]
    public function getType(): Type
    {
        return Type::ELEMENT;
    }

    /** @inheritdoc  */
    #[Override]
    public function requires(): array
    {
        return [
            Target::class,
            Href::class,
        ];
    }

    #[Override]
    public function typeOfRequirement(): Requirement
    {
        return Requirement::ALL;
    }
}
