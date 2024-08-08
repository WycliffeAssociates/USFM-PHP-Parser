<?php

namespace USFM\USFMParser\Models\Markers;

class PNGMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "png";
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