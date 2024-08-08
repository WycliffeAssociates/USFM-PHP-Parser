<?php

namespace USFM\USFMParser\Models\Markers;

class FQAEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "fqa*";
    }
}