# USFM Parser in PHP
A USFM parser component that was ported from [USFMToolsSharp](https://github.com/WycliffeAssociates/USFMToolsSharp)

# How to use

```
<?php
use USFM\USFMParser\USFMParser;

$usfmString = "<YOUR USFM TEXT>";

$parser = new USFMParser();
$document = $parser->parseFromString($usfmString);

$directChildren = $document->contents;
$allChapters = $document->getChildMarkers(CMarker::class);
$chapterVerses = $allChapters[0]->getChildMarkers(VMarker::class);
```