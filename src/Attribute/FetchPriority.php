<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class FetchPriority extends Attribute
{
    public function __construct(Attribute\Value\FetchPriority $fetchPriority)
    {
        parent::__construct($fetchPriority->value);
    }

    #[Override]
    public function name(): string
    {
        return 'fetchpriority';
    }
}
