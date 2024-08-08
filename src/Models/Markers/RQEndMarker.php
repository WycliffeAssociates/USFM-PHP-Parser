<?php

namespace USFM\USFMParser\Models\Markers;

class RQEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "rq*";
    }
}