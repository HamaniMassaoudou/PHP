<?php

  $nbr = 3;
  $fact = 1;
   
  for ($i=$nbr; $i>=1; $i--)
  {
    $fact = $fact * $i;
  }
   
  echo "La factorielle de $nbr est $fact";

?>