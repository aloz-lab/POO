<?php


class Speedometer
{
    const conversion = 0.6214;

    public static function convertKmToMiles($distanceKm)
    {
        return ($distanceKm*self::conversion);
    }

    public static function convertMilesToKm($distanceMile)
    {
        return ($distanceMile/self::conversion);
    }
}

echo Speedometer::convertKmToMiles(10);
echo "<br>";
echo Speedometer::convertMilesToKm(100);