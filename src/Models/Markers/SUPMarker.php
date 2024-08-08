<?php

namespace USFM\USFMParser\Models\Markers;

class SUPMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "sup";
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