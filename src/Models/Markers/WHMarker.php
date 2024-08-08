<?php

namespace USFM\USFMParser\Models\Markers;

class WHMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "wh";
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