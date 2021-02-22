<?php

function pre($content, $continue){
	echo '<prep>';
	print_r($content);
	echo '</pre>';
	if(!$continue) exit;
}
