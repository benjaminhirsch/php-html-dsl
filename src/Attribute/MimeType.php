<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class MimeType extends Attribute
{
    public function __construct(string $type)
    {
        parent::__construct($type);
    }

    #[Override]
    public function name(): string
    {
        return 'type';
    }
}
