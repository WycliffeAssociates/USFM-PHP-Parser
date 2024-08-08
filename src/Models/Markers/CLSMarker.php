<?php

namespace USFM\USFMParser\Models\Markers;

class CLSMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "cls";
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