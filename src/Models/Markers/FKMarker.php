<?php

namespace USFM\USFMParser\Models\Markers;

class FKMarker extends Marker
{
    public string $footNoteKeyword;

    public function getIdentifier(): string
    {
        return "fk";
    }

    public function preProcess(string $input): string
    {
        $this->footNoteKeyword = trim($input);
        return "";
    }
}