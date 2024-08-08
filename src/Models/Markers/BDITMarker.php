<?php

namespace USFM\USFMParser\Models\Markers;

class BDITMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "bdit";
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