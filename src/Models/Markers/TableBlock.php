<?php

namespace USFM\USFMParser\Models\Markers;

class TableBlock extends Marker
{
    public function getIdentifier(): string
    {
        return "";
    }

    public function getAllowedContents(): array
    {
        return [TRMarker::class];
    }
}