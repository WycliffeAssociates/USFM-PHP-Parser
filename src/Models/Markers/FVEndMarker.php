<?php

namespace USFM\USFMParser\Models\Markers;

class FVEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "fv*";
    }
}