# USFM Parser in PHP
A USFM parser component that was ported from [USFMToolsSharp](https://github.com/WycliffeAssociates/USFMToolsSharp)

# Requirements

`PHP >=8.0`

# Installation
Add in your composer.json file

`"usfmphp/usfmparser": "0.2.0"`

# Usage

```php
<?php
use USFM\USFMParser\USFMParser;
use USFM\USFMParser\Models\Markers\CMarker;
use USFM\USFMParser\Models\Markers\VMarker;

$usfmString = "<YOUR USFM TEXT>";

$parser = new USFMParser();
$document = $parser->parseFromString($usfmString);

$directChildren = $document->contents;
$allChapters = $document->getChildMarkers(CMarker::class);
$chapterVerses = $allChapters[0]->getChildMarkers(VMarker::class);
```