#!/usr/local/bin/php

<?php

	# ---------------------------------
	# Hacker Rank - Algorithms - Warmup
	# Birthday Cake Candles
	# Author: Carlos L. Cuenca
	# Date: 10/29/2020

	# ------------------------
	# Function Implementations

	function birthdayCakeCandles($candles) {

		$maximum = -999999999;
		$maximumCount = 0;

		for($candle = 0; $candle < count($candles); $candle++) {

			if($candles[$candle] > $maximum) {

				$maximum = $candles[$candle];

				$maximumCount = 1;

			} else if ($maximum == $candles[$candle]) {

				$maximumCount++;

			}

		}

		return $maximumCount;

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$candles = array_map('intval', explode(" ", fgets($input)));

		print(birthdayCakeCandles($candles));
		print("\n");

		$inputCount--;

	}



?>