#!/usr/local/bin/php

<?php

	# ---------------------------------
	# Hacker Rank - Algorithms - Warmup
	# Staircase
	# Author: Carlos L. Cuenca
	# Date: 10/28/2020

	# ------------------------
	# Function Implementations

	function staircase($number) {

		$stairString = "";

		for($line = 1; $line <= $number; $line++) {

			for($index = 0; $index < $number - $line; $index++) {

				$stairString .= " ";

			}

			for($index = 0; $index < $line; $index++) {

				$stairString .= "#";

			}

			if($line < $number) $stairString .= "\n";

		}

		return $stairString;

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$number = (int) fgets($input);

		print(staircase($number));
		print("\n");

		$inputCount--;

	}



?>