<?php

namespace USFM\USFMParser\Models\Markers;

class SIGEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "sig*";
    }
}