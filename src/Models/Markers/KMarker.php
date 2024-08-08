<?php

namespace USFM\USFMParser\Models\Markers;

/**
 * Normal Text
 */
class KMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "k";
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