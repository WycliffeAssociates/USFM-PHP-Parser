<?php

namespace USFM\USFMParser\Models\Markers;

class NDEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "nd*";
    }
}