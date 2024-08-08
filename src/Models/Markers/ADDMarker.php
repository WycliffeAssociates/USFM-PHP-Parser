<?php

namespace USFM\USFMParser\Models\Markers;

class ADDMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "add";
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