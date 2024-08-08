<?php

namespace USFM\USFMParser\Models\Markers;

class FQEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "fq*";
    }
}