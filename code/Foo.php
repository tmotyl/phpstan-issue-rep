<?php
declare(strict_types=1);

namespace Somenamespace;

final class Foo
{
    public function abc(string $identifier): string
    {
        return $identifier;
    }

    protected static function getMethodName(): string
    {
        return 'getResourceModel';
    }
}
