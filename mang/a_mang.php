<?php

    $findMax5 = array(14,12,38,17,10,36,12,29,45,34,48,22);
         rsort($findMax5);
    for($x = 0; $x < 5; $x++) 
    {
         echo $findMax5[$x];
         echo " ";
    }

?>