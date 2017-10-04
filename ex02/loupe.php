#!/usr/bin/php
<?php
	error_reporting(E_STRICT);
	if ($argc > 1 && ($content = file_get_contents($argv[1])) !== FALSE) {
		$content = preg_replace_callback("/<a.*?<\/a>/s", function($matches1) {
			$matches1[0] = preg_replace_callback("/>.*?</s", function($matches2) {
				return strtoupper($matches2[0]);
			},
			$matches1[0]);

			return preg_replace_callback('/title="(.*?)"/s', function($matches2) {
				return 'title="'.strtoupper($matches2[1]).'"';
			}, $matches1[0]);
		}, 
		$content);
		
		echo $content;
	}
?>