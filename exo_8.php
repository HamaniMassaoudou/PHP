<?php

  function factoriel($nbr){
    if($nbr <= 1){
      return 1;   
    }
    else{
      return $nbr * factoriel($nbr - 1);
    }
  }
    
  $nbr = 3; 
  $fact = factoriel($nbr); 
  echo "La factorielle de $nbr est $fact"; 

?>