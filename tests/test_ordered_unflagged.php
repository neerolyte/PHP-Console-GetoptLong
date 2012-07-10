<?php

require_once "../Console/GetoptLong.php";

$first = '';
$second = '';
$args = Console_GetoptLong::getOptions(array(
	'first|f|_0=s'  => &$first,
	'_1=s'          => &$second,
));

echo "$first,$second,(", implode(',',$args), ")\n";

