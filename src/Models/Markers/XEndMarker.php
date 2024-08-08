<?php

namespace USFM\USFMParser\Models\Markers;

class XEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "x*";
    }
}