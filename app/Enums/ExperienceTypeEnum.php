<?php

namespace App\Enums;

enum ExperienceTypeEnum: string
{
    case WORK = 'work';
    case EDUCATION = 'education';

    public static function toArray(): array
    {
        $array = [];
        foreach (self::cases() as $case) {
            $array[$case->name] = $case->value;
        }
        return $array;
    }
}
