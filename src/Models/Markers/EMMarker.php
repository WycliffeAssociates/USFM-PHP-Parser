<?php

namespace USFM\USFMParser\Models\Markers;

/**
 * Emphasis text
 */
class EMMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "em";
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