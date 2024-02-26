<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute\Specific;

use BenjaminHirsch\Html\Attribute;
use Override;
use RuntimeException;

use function sprintf;
use function str_starts_with;

final readonly class UseMap extends Attribute
{
    public function __construct(string $value)
    {
        if (! str_starts_with($value, '#')) {
            throw new RuntimeException(sprintf('The value for usemap must start with #,`%s` given', $value));
        }

        parent::__construct($value);
    }

    #[Override]
    public function name(): string
    {
        return 'usemap';
    }
}
