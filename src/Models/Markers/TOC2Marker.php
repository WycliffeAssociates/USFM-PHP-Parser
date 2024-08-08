<?php

namespace USFM\USFMParser\Models\Markers;

class TOC2Marker extends Marker
{
    public string $shortTableOfContentsText;

    public function getIdentifier(): string
    {
        return "toc2";
    }

    public function preProcess(string $input): string
    {
        $this->shortTableOfContentsText = trim($input);
        return "";
    }
}