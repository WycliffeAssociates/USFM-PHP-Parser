<?php

namespace USFM\USFMParser\Models\Markers;

class RMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "r";
    }

    public function preProcess(string $input): string
    {
        return trim($input);
    }

    public function getAllowedContents(): array
    {
        return [TextBlock::class];
    }
}