<?php

namespace USFM\USFMParser\Models\Markers;

class LITLEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "litl*";
    }
}