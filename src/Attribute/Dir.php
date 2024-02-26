<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use BenjaminHirsch\Html\Attribute;
use BenjaminHirsch\Html\IGlobalAttribute;
use Override;

final readonly class Dir extends Attribute implements IGlobalAttribute
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