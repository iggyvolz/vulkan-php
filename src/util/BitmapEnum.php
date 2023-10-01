<?php

namespace iggyvolz\vulkan\util;

trait BitmapEnum
{
    public static function toInt(self ...$items): int
    {
        $i=0;
        foreach(array_unique($items, SORT_REGULAR) as $item) {
            $i |= $item->value;
        }
        return $i;
    }

    /**
     * @return list<static>
     */
    public static function fromInt(int $n): array
    {
        $array = [];
        foreach(self::cases() as $case) {
            if($n|$case->value) {
                $array[]=$case;
            }
        }
        return $array;
    }
}