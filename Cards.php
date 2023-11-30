<?php
declare(strict_types=1);

enum Cards
{
    case SPADES;
    case HEARTS;
    case DIAMONDS;
    case CLUBS;

    public function color(): string
    {
        return match ($this) {
            self::SPADES, self::CLUBS => 'black',
            self::HEARTS, self::DIAMONDS => 'red',
        };
    }
}

$yourType = strtoupper($argv[1] ?? 'spades');
var_dump(Cards::{$yourType});

var_dump(Cards::{$yourType}->color());