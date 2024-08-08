<?php

namespace USFM\USFMParser\Models\Markers;

class ORDEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "ord*";
    }
}