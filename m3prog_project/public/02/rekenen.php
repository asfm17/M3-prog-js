<?php

   $getal = 16.75938;
   $afgerond = ceil($getal);
   echo "Als je ${getal} afrond dan krijg je: ${afgerond}";

   echo "<br>";

   $getal2 = 16.75938;
   $afgerond = floor($getal2);
   echo "Als je ${getal2} afrond dan krijg je: ${afgerond}";

   echo "<br>";
   echo "<br>";

   $randomGetal1 = rand(0,100);
   echo "Random Getal: ${randomGetal1}";

   echo "<br>";

   $randomGetal2 = rand(0,100);
   echo "Random Getal: ${randomGetal2}";

   echo "<br>";

   $randomGetal3 = rand(0,100);
   echo "Random Getal: ${randomGetal3}";

   echo "<br>";
   echo "<br>";

   $randomUitkomst = ($randomGetal1 + $randomGetal2);
   $randomGetal4 = ($randomUitkomst / $randomGetal3);
   echo "Als je ${randomGetal1} bij ${randomGetal2} optelt krijg je ${randomUitkomst}";

   echo "<br>";

   $randomUitkomst2 = ($randomUitkomst / $randomGetal3);
   echo "Als je ${randomUitkomst} deelt door ${randomGetal3} krijg je ${randomUitkomst2}";

?>




