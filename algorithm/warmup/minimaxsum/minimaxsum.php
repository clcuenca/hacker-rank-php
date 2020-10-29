#!/usr/local/bin/php

<?php

	# ---------------------------------
	# Hacker Rank - Algorithms - Warmup
	# Mini Max Sum
	# Author: Carlos L. Cuenca
	# Date: 10/28/2020

	# ------------------------
	# Function Implementations

	function miniMaxSum($array) {

		$minimumSum = 9999999999;
		$maximumSum = -9999999999;
		$n          = count($array);
		$choose     = 4;

		$combinations = array_fill(0, $choose + 2, 0);

		for($j = 0; $j < $choose; $j++) {

			$combinations[$j] = $j;

		}

		$combinations[$choose] = $n;
		$combinations[$choose + 1] = 0;

		$j = 0;

		while($j < $choose) {

			$sum = 0;

			for($index = 0; $index < $choose; $index++) {

				$sum += $array[$combinations[$index]];

			}

			if($sum > $maximumSum) $maximumSum = $sum;
			if($sum < $minimumSum) $minimumSum = $sum;

			$j = 0;

			while($combinations[$j] + 1 == $combinations[$j + 1]) {

				$combinations[$j] = $j;

				$j++;

			}

			$combinations[$j]++;

		}

		$printString = strval($minimumSum)." ".strval($maximumSum);

		print($printString);

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$numbers = array_map('intval', explode(" ", fgets($input)));

		miniMaxSum($numbers);

		print("\n");

		$inputCount--;

	}



?>