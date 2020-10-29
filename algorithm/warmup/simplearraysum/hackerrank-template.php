#!/usr/local/bin/php

<?php

	# ---------------------------------
	# Hacker Rank - Algorithms - Warmup
	# 
	# Author: Carlos L. Cuenca
	# Date:

	# ------------------------
	# Function Implementations

	# --------------
	# Driver Program

	$input = fopen('php://stdin', 'r');

	$inputCount = (int) fgets($input);

	while($inputCount > 0) {

		$numbers = array_map('intval', explode(" ", fgets($input)));

		print();
		print("\n");

		$inputCount--;

	}



?>