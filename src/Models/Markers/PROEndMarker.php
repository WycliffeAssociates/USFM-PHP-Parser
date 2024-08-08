<?php

namespace USFM\USFMParser\Models\Markers;

class PROEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "pro*";
    }
}