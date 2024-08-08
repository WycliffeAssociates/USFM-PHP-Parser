<?php

namespace USFM\USFMParser\Models\Markers;

class LIVMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "liv";
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