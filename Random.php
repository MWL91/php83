<?php
declare(strict_types=1);

use Random\IntervalBoundary;
use Random\Randomizer;

class Random
{
    public function __construct(private Randomizer $rng)
    {
    }

    public function generatePassword(
        string $subset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',
    ): string
    {

        return $this->rng->getBytesFromString($subset, 5);
    }

    public function float(
        int $from = 10,
        int $to = 20,
        IntervalBoundary $boundary = IntervalBoundary::OpenOpen
    ): float
    {
        return $this->rng->getFloat($from, $to, $boundary);
    }

    public function nextFloat(): float
    {
        return $this->rng->nextFloat();
    }
}

$random = new Random(new \Random\Randomizer());
var_dump($random->generatePassword());
var_dump($random->float());
var_dump($random->nextFloat());