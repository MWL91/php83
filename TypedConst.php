<?php
declare(strict_types=1);

class TypedConst
{
    public const int MAGIC_NUMBER = 666;
    private const string UNIT_NAME = 'cm';
    final protected const PARENT = 'TypedConst';

    public static function getUnitName(): string
    {
        return self::UNIT_NAME;
    }
}

echo TypedConst::MAGIC_NUMBER;
echo "\n";
echo TypedConst::getUnitName();
echo "\n";

$v = 'MAGIC_NUMBER';
echo TypedConst::{$v};