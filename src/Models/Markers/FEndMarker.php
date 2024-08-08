<?php

namespace USFM\USFMParser\Models\Markers;

class FEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "f*";
    }
}