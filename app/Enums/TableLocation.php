<?php

namespace App\Enums;

final class TableLocation
{
    public const Front = 'front';
    public const Inside = 'inside';
    public const Outside = 'outside';

    public static function getLocations(): array
    {
        return [
            self::Front => 'Front',
            self::Inside => 'Inside',
            self::Outside => 'Outside',
        ];
    }
}
