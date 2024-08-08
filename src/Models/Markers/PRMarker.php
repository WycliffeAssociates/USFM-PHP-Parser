<?php

namespace USFM\USFMParser\Models\Markers;

class PRMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "pr";
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