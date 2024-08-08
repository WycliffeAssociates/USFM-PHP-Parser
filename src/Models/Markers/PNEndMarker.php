<?php

namespace USFM\USFMParser\Models\Markers;

class PNEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "pn*";
    }
}