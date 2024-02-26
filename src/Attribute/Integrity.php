<?php

declare(strict_types=1);

namespace BenjaminHirsch\Html\Attribute;

use Override;
use RuntimeException;

use function base64_decode;
use function explode;
use function implode;
use function in_array;
use function is_bool;
use function sprintf;

final readonly class Integrity extends Attribute
{
    public function __construct(string $value)
    {
        $parts = explode('-', $value, 1);

        $validHashes = ['sha256', 'sha384', 'sha512'];
        if (! in_array($parts[0] ?? null, $validHashes, true)) {
            throw new RuntimeException(sprintf(
                'Unsupported hashing algorithm found `%s`, valid values are: %s',
                $parts[0],
                implode(', ', $validHashes),
            ));
        }

        if (is_bool(base64_decode($parts[1] ?? '-', true))) {
            throw new RuntimeException('Invalid base64 string for integrity given');
        }

        parent::__construct($value);
    }

    #[Override]
    public function name(): string
    {
        return 'integrity';
    }
}
