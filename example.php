<?php

require_once __DIR__ . "/mediawiki-zhconverter.inc.php";
echo @MediaWikiZhConverter::convert("面包", "zh-tw");
