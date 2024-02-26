<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Specific;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IRequiresAttribute;
use BenjaminHirsch\Html\Requirement;
use Override;

final readonly class ControlList extends Attribute implements IRequiresAttribute
{
    public function __construct(Attribute\Value\ControlsList $controlsList)
    {
        parent::__construct($controlsList->value);
    }

    #[Override]
    public function name(): string
    {
        return 'contr';
    }

    /** @inheritDoc */
    #[Override]
    public function requires(): array
    {
        return [Controls::class];
    }

    #[Override]
    public function typeOfRequirement(): Requirement
    {
        return Requirement::ALL;
    }
}
