<?php

namespace USFM\USFMParser\Models\Markers;

class KEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "k*";
    }
}