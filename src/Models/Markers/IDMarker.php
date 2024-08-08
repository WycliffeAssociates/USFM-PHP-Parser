<?php

namespace USFM\USFMParser\Models\Markers;

class IDMarker extends Marker
{
    public string $textIdentifier;

    public function getIdentifier(): string
    {
        return "id";
    }

    public function preProcess(string $input): string
    {
        $this->textIdentifier = trim($input);
        return "";
    }
}