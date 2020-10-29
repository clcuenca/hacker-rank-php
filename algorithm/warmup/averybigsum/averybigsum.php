#!/usr/local/bin/php

<?php

	# ---------------------------------
	# Hacker Rank - Algorithms - Warmup
	# A Very Big Sum
	# Author: Carlos L. Cuenca
	# Date: 10/28/2020

	# ------------------------
	# Function Implementations

	function aVeryBigSum($values) {

		$sum = 0;

		for($index = 0; $index < count($values); $index++) {

			$sum += $values[$index];

		}

		return $sum;

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$numbers = array_map('intval', explode(" ", fgets($input)));

		print(aVeryBigSum($numbers));
		print("\n");

		$inputCount--;

	}



?>