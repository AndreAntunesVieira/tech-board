<?php

function pre($content, $stop = 1){
	echo '<prep>';
	print_r($content);
	echo '</pre>';
	if($stop) exit;
}
