<?php

namespace USFM\USFMParser\Models\Markers;

class IOREndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "ior*";
    }
}