<?php

namespace USFM\USFMParser\Models\Markers;

class LIKEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "lik*";
    }
}