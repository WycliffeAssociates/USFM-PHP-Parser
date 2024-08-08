<?php

namespace USFM\USFMParser\Models\Markers;

class SLSEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "sls*";
    }
}