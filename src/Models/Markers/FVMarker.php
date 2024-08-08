<?php

namespace USFM\USFMParser\Models\Markers;

class FVMarker extends Marker
{
    public string $verseCharacter;

    public function getIdentifier(): string
    {
        return "fv";
    }

    public function preProcess(string $input): string
    {
        $this->verseCharacter = trim($input);
        return "";
    }
}