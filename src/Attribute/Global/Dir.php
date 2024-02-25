<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Global;

use BenjaminHirsch\Html\Attribute;
use Override;

final readonly class Dir extends Attribute
{
    public function __construct(Attribute\Value\Dir $dir)
    {
        parent::__construct($dir->value);
    }

    #[Override]
    public function name(): string
    {
        return 'dir';
    }
}
