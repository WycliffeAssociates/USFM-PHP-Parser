<?php

namespace USFM\USFMParser\Models\Markers;

class SCEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "sc*";
    }
}