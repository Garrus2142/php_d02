#!/usr/bin/php
<?php
	if ($argc > 1) {
		$pattern = array(
			"/(^([\t ]*)|([\t ]*)$)/",
			"/[\t ]+/"
		);

		$replacement = array(
			"",
			" ",
		);
		
		echo preg_replace($pattern, $replacement, $argv[1])."\n";
	}
?>