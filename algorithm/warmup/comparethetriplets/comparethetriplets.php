#!/usr/local/bin/php

<?php

	# ---------------------------------
	# Hacker Rank - Algorithms - Warmup
	# Compare the Triplets
	# Author: Carlos L. Cuenca
	# Date: 10/28/2020

	# ------------------------
	# Function Implementations

	function compareTriplets($alice, $bob) {

		$aliceCount = 0;
		$bobCount   = 0;

		for($index = 0; $index < 3; $index++) {

			if($alice[$index] > $bob[$index]) $aliceCount++;
			if($alice[$index] < $bob[$index]) $bobCount++;

		}

		return array($aliceCount, $bobCount);

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$alice = array_map('intval', explode(" ", fgets($input)));
		$bob   = array_map('intval', explode(" ", fgets($input)));

		print(compareTriplets($alice, $bob));
		print("\n");

		$inputCount--;

	}



?>