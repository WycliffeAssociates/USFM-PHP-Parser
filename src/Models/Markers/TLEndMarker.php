<?php

namespace USFM\USFMParser\Models\Markers;

class TLEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "tl*";
    }
}