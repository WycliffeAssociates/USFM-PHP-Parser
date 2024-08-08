<?php

namespace USFM\USFMParser\Models\Markers;

class CPMarker extends Marker
{
    public string $publishedChapterMarker;

    public function getIdentifier(): string
    {
        return "cp";
    }

    public function preProcess(string $input): string
    {
        $this->publishedChapterMarker = trim($input);
        return "";
    }
}