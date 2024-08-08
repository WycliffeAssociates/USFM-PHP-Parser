<?php

namespace USFM\USFMParser\Models\Markers;

/**
 * Alternate chapter number
 */
class CAMarker extends Marker
{
    public string $altChapterNumber;

    public function getIdentifier(): string
    {
        return "ca";
    }

    public function preProcess(string $input): string
    {
        $this->altChapterNumber = trim($input);
        return "";
    }
}