<?php

namespace USFM\USFMParser\Models\Markers;

class SUPEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "sup*";
    }
}