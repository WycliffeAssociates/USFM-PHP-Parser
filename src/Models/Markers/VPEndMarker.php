<?php

namespace USFM\USFMParser\Models\Markers;

class VPEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "vp*";
    }
}