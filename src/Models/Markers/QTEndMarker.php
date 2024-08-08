<?php

namespace USFM\USFMParser\Models\Markers;

class QTEndMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "qt*";
    }
}