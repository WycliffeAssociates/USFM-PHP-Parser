<?php

namespace USFM\USFMParser\Models\Markers;

class WHEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "wh*";
    }
}