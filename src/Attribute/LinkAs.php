<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;

final readonly class LinkAs extends Attribute
{
    public function __construct(Value\LinkAs $linkAs)
    {
        parent::__construct($linkAs->value);
    }

    #[Override]
    public function name(): string
    {
        return 'as';
    }
}
