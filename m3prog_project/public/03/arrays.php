<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $data = array();
      $namen = ["Superman", "Darth Vader", "Joker", "Saitama", "Light Yagami", "Gol D. Roger"];
      $namen[6] = "Eminem";

      echo count($namen);
      sort($namen);
      print_r($data);
      array_pop($namen);
      array_push($namen,"Ik");
      print_r($namen);
      
      $namen_tekst= implode("<br>",$namen);
      echo $namen_tekst;
      explode("",$namen_tekst);
      print_r($namen_tekst)

    ?>
</body>
</html>