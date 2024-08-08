<?php

namespace USFM\USFMParser\Models\Markers;

class EMEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "em*";
    }
}