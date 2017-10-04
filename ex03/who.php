#!/usr/bin/php
<?php
	exec("finger -l", $res);

	if (count($res) > 2) {
		foreach ($res as $item) {
			if (preg_match("/Login: ([^ ]*)/", $item, $newlogin))
				$login = $newlogin;
			else {
				if (preg_match("/On since (?:[^ ]*) *([^ ]*)[^0-9]*([0-9]{1,2}) *([0-9]{1,2}:[0-9]{1,2}).*on ([^, ]*)/",
					$item, $info)) {
					printf("%s\t %s  %s %2s %s \n", $login[1], $info[4], $info[1], $info[2], $info[3]);
				}
			}
		}
	}
?>