<?php

namespace USFM\USFMParser\Models\Markers;

class RBEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "rb*";
    }
}