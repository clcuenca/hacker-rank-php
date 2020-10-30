#!/usr/local/bin/php

<?php

	# ---------------------------------
	# Hacker Rank - Algorithms - Warmup
	# Time Conversion
	# Author: Carlos L. Cuenca
	# Date: 10/28/2020

	# ------------------------
	# Function Implementations

	function timeConversion($time) {

		$newTime = "";

		$hours   = intval(strval($time[0]).strval($time[1]));
		$minutes = intval(strval($time[3]).strval($time[4]));
		$seconds = intval(strval($time[6]).strval($time[7]));
		$timePeriod = strval($time[8]).strval($time[9]);

		$hours = $hours % 12;

		if($timePeriod == "PM") {

			$hours += 12;

		}

		if($hours < 10) {

        	$newTime .= ("0".strval($hours));

    	} else {

    	    $newTime .= strval($hours);

    	}

   		$newTime .= ":";

    	if($minutes < 10) {

        	$newTime .= ("0".strval($minutes));

    	} else {

        	$newTime .= strval($minutes);

    	}

    	$newTime .= ":";

    	if($seconds < 10) {

        	$newTime .= ("0".strval($seconds));

    	} else {

        	$newTime .= strval($seconds);

   	 	}

		return $newTime;

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$time = fgets($input);

		print(timeConversion($time));
		print("\n");

		$inputCount--;

	}

?>