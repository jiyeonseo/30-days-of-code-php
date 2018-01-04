<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$mealCost = fgets($_fp);
$tipPercent = fgets($_fp) / 100 * $mealCost;
$taxPercent = fgets($_fp) / 100 * $mealCost;

$total = round($mealCost + $tipPercent + $taxPercent);

print('The total meal cost is '.$total.' dollars.');

?>
