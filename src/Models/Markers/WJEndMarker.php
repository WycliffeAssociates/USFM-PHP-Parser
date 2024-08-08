<?php

namespace USFM\USFMParser\Models\Markers;

class WJEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "wj*";
    }
}