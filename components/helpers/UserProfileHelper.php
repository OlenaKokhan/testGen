<?php

namespace app\components\helpers;

class UserProfileHelper
{
    public static function getGender ($number)
    {
        if ($number == 0) {
            return 'Female';
        }
        return 'Male';
    }

    public static function getAgesArray ()
    {
        return array_combine(range(18, 115), range(18, 115));
    }

    public static function getGenders ()
    {
        return [1 => 'Male', 0 => 'Female'];
    }
}
