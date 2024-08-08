<?php

namespace USFM\USFMParser\Models\Markers;

class BKEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "bk*";
    }
}