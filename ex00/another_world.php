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
		
		$res = preg_replace($pattern, $replacement, $argv[1]);
		if (strlen($res) > 0)
			echo "$res\n";
	}
?>
