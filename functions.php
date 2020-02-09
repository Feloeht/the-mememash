<?php

// Calculer la probabilite que a ou b gagne
function expected($Rb, $Ra) {
	return 1/(1 + pow(10, ($Rb-$Ra)/400)); //pow = exponentielle
}

// Calculer le nouveau score du gagnant
function win($score, $expected, $k = 24) {
	return $score + $k * (1-$expected);
}

// Calculer le nouveau score du perdant
function loss($score, $expected, $k = 24) {
	return $score + $k * (0-$expected);
}

?>