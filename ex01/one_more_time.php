#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$months = array(
			'janvier' => '01',
			'fevrier' => '02',
			'mars' => '03',
			'avril' => '04',
			'mai' => '05',
			'juin' => '06',
			'juillet' => '07',
			'aout' => '08',
			'août' => '08',
			'septembre' => '09',
			'octobre' => '10',
			'novembre' => '11',
			'decembre' => '12'
		);

		$argv[1] = trim(strtolower($argv[1]));
		if (preg_match("/^([a-z]+) (\d{1,2}) ([a-z]+) (\d{4}) (\d{2}):(\d{2}):(\d{2})$/", $argv[1], $matches)
			&& isset($months[$matches[3]]))
		{
			date_default_timezone_set("Europe/Paris");
			setlocale(LC_ALL, 'fr_FR');

			if (($timestamp = strtotime($months[$matches[3]]."/$matches[2]/$matches[4] $matches[5]:$matches[6]:$matches[7]")) !== FALSE 
				&& strtolower(strftime("%A", $timestamp)) === $matches[1])
				echo "$timestamp\n";
			else
				echo "Wrong Format\n";
		}
		else
			echo "Wrong Format\n";
	}
?>