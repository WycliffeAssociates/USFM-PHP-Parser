<?php

namespace USFM\USFMParser\Models\Markers;

class IOTMarker extends Marker
{
    public string $title;

    public function getIdentifier(): string
    {
        return "iot";
    }

    public function preProcess(string $input): string
    {
        $this->title = trim($input);
        return "";
    }
}