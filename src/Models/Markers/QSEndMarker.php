<?php

namespace USFM\USFMParser\Models\Markers;

class QSEndMarker extends QSMarker
{
    public function getIdentifier(): string
    {
        return "qs*";
    }
}