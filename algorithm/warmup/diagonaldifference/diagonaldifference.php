#!/usr/local/bin/php

<?php

	# ---------------------------------
	# Hacker Rank - Algorithms - Warmup
	# Diagonal Difference
	# Author: Carlos L. Cuenca
	# Date: 10/28/2020

	# ------------------------
	# Function Implementations

	function diagonalDifference($matrix) {

		$leftDiagonal  = 0;
		$rightDiagonal = 0;

		for($index = 0; $index < count($matrix); $index++) {

			$leftDiagonal += $matrix[$index][$index];

		}

		for($index = 0; $index < count($matrix); $index++) {

			$rightDiagonal += $matrix[$index][count($matrix) - $index - 1];

		}

		return abs($leftDiagonal - $rightDiagonal);

	}

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$matrixSize = (int) fgets($input);

		$matrix = array();

		for($index = 0; $index < $matrixSize; $index++) {

			$row = array_map('intval', explode(" ", fgets($input)));

			array_push($matrix, $row);

		}


		print(diagonalDifference($matrix));
		print("\n");

		$inputCount--;

	}



?>