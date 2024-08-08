<?php

namespace USFM\USFMParser\Models\Markers;

class VPMarker extends Marker
{
    public string $verseCharacter;

    public function getIdentifier(): string
    {
        return "vp";
    }

    public function preProcess(string $input): string
    {
        $this->verseCharacter = trim($input);
        return "";
    }
}