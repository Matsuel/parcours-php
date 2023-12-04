<?php

class Geolocation 
{
    public static function fromGeoPoints(float $lat1, float $lon1, float $lat2, float $lon2): float{
        $earthRadius = 6371;
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
        $a = (sin($dLat / 2) **2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * (sin($dLon / 2) **2);
        $c = 2 * asin(sqrt($a));
        return round($earthRadius * $c,1);
    }
}

$calc = Geolocation::fromGeoPoints(40.76, -73.984, 38.89, -77.032);

echo $calc; // 334.436