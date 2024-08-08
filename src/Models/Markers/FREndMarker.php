<?php

namespace USFM\USFMParser\Models\Markers;

class FREndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "fr*";
    }
}