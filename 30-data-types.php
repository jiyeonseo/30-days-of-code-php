<?php
// https://www.hackerrank.com/challenges/30-data-types/problem
  $handle = fopen ("php://stdin","r");
  $i = 4;
  $d = 4.0;
  $s = "HackerRank ";

#####

  $arr=[];
  while($f = fgets($handle)){
      array_push($arr, $f);
  }

  print($i+$arr[0]);
  print("\n");
  printf("%.1f", $d + $arr[1]);
  print("\n");
  print($s.$arr[2]);

#####

  fclose($handle);
?>
