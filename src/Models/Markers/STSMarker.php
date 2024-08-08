<?php

namespace USFM\USFMParser\Models\Markers;

class STSMarker extends Marker
{
    public string $statusText;

    public function getIdentifier(): string
    {
        return "sts";
    }

    public function preProcess(string $input): string
    {
        $this->statusText = trim($input);
        return "";
    }
}