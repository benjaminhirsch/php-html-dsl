<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Requirement;
use BenjaminHirsch\Html\RequiresAttribute;
use Override;

final readonly class HttpEquiv extends Attribute implements RequiresAttribute
{
    public function __construct(Value\HttpEquiv $httpEquiv)
    {
        parent::__construct($httpEquiv->value);
    }

    #[Override]
    public function name(): string
    {
        return 'http-equiv';
    }

    /** @inheritDoc */
    #[Override]
    public function requires(): array
    {
        return [Content::class];
    }

    #[Override]
    public function typeOfRequirement(): Requirement
    {
        return Requirement::ALL;
    }
}
