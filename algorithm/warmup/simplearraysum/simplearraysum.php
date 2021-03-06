#!/usr/local/bin/php

<?php

	# ---------------------------------
	# Hacker Rank - Algorithms - Warmup
	# Simple Array Sum
	# Author: Carlos L. Cuenca
	# Date: 10/28/2020

	# ------------------------
	# Function Implementations

	function simpleArraySum($array) {

		$sum = 0;

		for($index = 0; $index < count($array); $index++) {

			$sum += $array[$index];

		}

		return $sum;

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$numbers = array_map('intval', explode(" ", fgets($input)));

		print(simpleArraySum($numbers));
		print("\n");

		$inputCount--;

	}



?>