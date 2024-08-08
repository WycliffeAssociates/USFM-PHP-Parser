<?php

namespace USFM\USFMParser\Models\Markers;

class NOEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "no*";
    }
}