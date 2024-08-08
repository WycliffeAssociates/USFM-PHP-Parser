<?php

namespace USFM\USFMParser\Models\Markers;

class BDEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "bd*";
    }
}