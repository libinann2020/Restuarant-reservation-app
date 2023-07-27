<?php

namespace App\Enums;

final class TableStatus
{
    public const Pending = 'pending';
    public const Available = 'available';
    public const Unavailable = 'unavailable';

    public static function getStatuses(): array
    {
        return [
            self::Pending => 'Pending',
            self::Available => 'Available',
            self::Unavailable => 'Unavailable',
        ];
    }
}
