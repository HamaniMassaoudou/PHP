
<?php

  function decrement($n) 
  {
    if($n > 0)
    {
      print("$n <br/>");
      decrement($n - 1);
    }
  }
  decrement(10);


?>