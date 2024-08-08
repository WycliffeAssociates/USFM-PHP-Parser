<?php

namespace USFM\USFMParser\Models\Markers;

class CAEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "ca*";
    }
}