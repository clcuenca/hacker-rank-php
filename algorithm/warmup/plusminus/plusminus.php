#!/usr/local/bin/php

<?php

	# ---------------------------------
	# Hacker Rank - Algorithms - Warmup
	# Plus Minus
	# Author: Carlos L. Cuenca
	# Date: 10/28/2020

	# ------------------------
	# Function Implementations

	function plusMinus($array) {

		$positiveCount = 0;
		$negativeCount = 0;
		$zeroCount     = 0;

		for($index = 0; $index < count($array); $index++) {

			if($array[$index] > 0) $positiveCount++;
			if($array[$index] < 0) $negativeCount++;
			if($array[$index] == 0) $zeroCount++;

		}

		print(sprintf("%.6f", ((float) $positiveCount / count($array)))." \n");
		print(sprintf("%.6f", ((float) $negativeCount / count($array)))." \n");
		print(sprintf("%.6f", ((float) $zeroCount     / count($array)))." \n");

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$numbers = array_map('intval', explode(" ", fgets($input)));

		print(plusMinus($numbers));
		print("\n");

		$inputCount--;

	}



?>