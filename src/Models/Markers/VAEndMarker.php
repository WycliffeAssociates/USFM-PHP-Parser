<?php

namespace USFM\USFMParser\Models\Markers;

class VAEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "va*";
    }
}