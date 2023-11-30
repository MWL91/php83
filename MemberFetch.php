<?php
declare(strict_types=1);

class MemberFetch
{
    public const int MAGIC_NUMBER = 666;
    private const string UNIT_NAME = 'cm';
    final protected const PARENT = 'TypedConst';

    public static function getUnitName(): string
    {
        return self::UNIT_NAME;
    }
}

$name = 'MAGIC_NUMBER';

echo MemberFetch::{$name};