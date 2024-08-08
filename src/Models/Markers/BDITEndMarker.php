<?php

namespace USFM\USFMParser\Models\Markers;

class BDITEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "bdit*";
    }
}