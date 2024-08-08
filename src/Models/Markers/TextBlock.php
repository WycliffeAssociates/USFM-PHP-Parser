<?php

namespace USFM\USFMParser\Models\Markers;

class TextBlock extends Marker
{
    public string $text;

    public function __construct(string $text)
    {
        parent::__construct();
        $this->text = $text;
    }

    public function getIdentifier(): string
    {
        return "";
    }
}