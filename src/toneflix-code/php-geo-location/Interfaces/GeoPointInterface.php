<?php

namespace ToneflixCode\PhpGeoLocation\Interfaces;

use ToneflixCode\PhpGeoLocation\GeoPoint;
use ToneflixCode\PhpGeoLocation\Polygon;

interface GeoPointInterface
{
    public function inPolygon(Polygon $polygon);

    public function distanceTo(GeoPoint $geopoint, $unitofmeasure);
}
