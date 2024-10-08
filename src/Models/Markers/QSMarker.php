<?php

namespace USFM\USFMParser\Models\Markers;

class QSMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "qs";
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