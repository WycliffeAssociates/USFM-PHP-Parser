<?php

namespace USFM\USFMParser\Models\Markers;

class ADDEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "add*";
    }
}