<?php

namespace USFM\USFMParser\Models\Markers;

class IBMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "ib";
    }
}