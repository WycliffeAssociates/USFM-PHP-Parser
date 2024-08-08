<?php

namespace USFM\USFMParser\Models\Markers;

class LFMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "lf";
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