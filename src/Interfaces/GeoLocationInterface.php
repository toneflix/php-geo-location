<?php

namespace ToneflixCode\PhpGeoLocation\Interfaces;

interface GeoLocationInterface
{
    public static function fromDegrees($latitude, $longitude);

    public static function fromRadians($latitude, $longitude);

    public function getLatitudeInDegrees();

    public function getLongitudeInDegrees();

    public function getLatitudeInRadians();

    public function getLongitudeInRadians();

    public static function milesToKilometers($miles);

    public static function kilometersToMiles($km);
}
