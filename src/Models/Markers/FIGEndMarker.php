<?php

namespace USFM\USFMParser\Models\Markers;

class FIGEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "fig*";
    }
}