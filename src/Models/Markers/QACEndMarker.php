<?php

namespace USFM\USFMParser\Models\Markers;

class QACEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "qac*";
    }
}