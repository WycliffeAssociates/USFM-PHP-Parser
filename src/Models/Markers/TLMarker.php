<?php

namespace USFM\USFMParser\Models\Markers;

class TLMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "tl";
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