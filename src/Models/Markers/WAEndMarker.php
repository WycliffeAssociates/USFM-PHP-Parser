<?php

namespace USFM\USFMParser\Models\Markers;

class WAEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "wa*";
    }
}