<?php

namespace USFM\USFMParser\Models\Markers;

class IPQMarker extends Marker
{
    public function getIdentifier(): string
    {
        return "ipq";
    }

    public function preProcess(string $input): string
    {
        return trim($input);
    }

    public function getAllowedContents(): array
    {
        return [
            TextBlock::class,
            BKMarker::class,
            BKEndMarker::class,
            BDMarker::class,
            BDEndMarker::class,
            ITMarker::class,
            ITEndMarker::class,
            SCMarker::class,
            SCEndMarker::class,
            BDITMarker::class,
            BDITEndMarker::class,
            NDMarker::class,
            NDEndMarker::class,
            NOMarker::class,
            NOEndMarker::class,
            SUPMarker::class,
            SUPEndMarker::class
        ];
    }
}