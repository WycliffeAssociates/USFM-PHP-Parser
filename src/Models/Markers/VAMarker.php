<?php

namespace USFM\USFMParser\Models\Markers;

class VAMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "va";
    }

    public function preProcess(string $input): string
    {
        return trim($input);
    }
}