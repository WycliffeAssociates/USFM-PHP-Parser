<?php

namespace USFM\USFMParser\Models\Markers;

class PNGEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "png*";
    }
}