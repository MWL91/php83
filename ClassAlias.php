<?php
declare(strict_types=1);

class ClassAlias
{
    public function name(): string
    {
        return "This is my name";
    }
}

class_alias(ClassAlias::class, 'MyAlias');

$myAlias = new MyAlias();
echo $myAlias->name();