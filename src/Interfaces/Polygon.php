<?php

namespace ToneflixCode\PhpGeoLocation\Interfaces;

use ToneflixCode\PhpGeoLocation\GeoPoint;

interface Polygon
{
    // public $coordinates = array();

    public function __construct(array $array);

    public function surroundsGeoPoint(GeoPoint $geopoint);
}
