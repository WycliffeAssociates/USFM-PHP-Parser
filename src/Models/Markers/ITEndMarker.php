<?php

namespace USFM\USFMParser\Models\Markers;

class ITEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "it*";
    }
}