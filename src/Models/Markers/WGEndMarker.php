<?php

namespace USFM\USFMParser\Models\Markers;

class WGEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "wg*";
    }
}