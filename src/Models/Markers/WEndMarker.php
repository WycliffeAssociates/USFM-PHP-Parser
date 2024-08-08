<?php

namespace USFM\USFMParser\Models\Markers;

class WEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "w*";
    }
}