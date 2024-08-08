<?php

namespace USFM\USFMParser\Models\Markers;

class FQMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "fq";
    }

    public function preProcess(string $input): string
    {
        return ltrim($input);
    }

    public function getAllowedContents(): array
    {
        return [
            TextBlock::class,
            TLMarker::class,
            TLEndMarker::class,
            WMarker::class,
            WEndMarker::class
        ];
    }
}