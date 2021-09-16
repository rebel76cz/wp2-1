<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

                     <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body>
<h1>Převod měn</h1>
<br>

<?php 
        $amount = filter_input(INPUT_POST, 'amount');
          $final = 0 ;
define('EUR_CZK', 25);
            $sub = filter_input(INPUT_POST, 'odeslat');
              $switch =  filter_input(INPUT_POST, 'switch');
                    $text = "Převod : " ;
?>

<?php
if (isset($sub)) {

 switch ($switch) {
  case 'czk_eur': 
            $final = $amount / EUR_CZK ;
               $curencyfrom = " CZK " ;
                 $curencyto = " EUR " ;
        break;
  case 'eur_czk': 
                 $final = $amount * EUR_CZK ;
               $curencyfrom = " EUR " ;
            $curencyto = " CZK " ;
        break;
                    }

              $all =$text . $amount . $curencyfrom . " = " . $final . $curencyto ?>
<?= $all ?>

<?php

} else { ?>
        <form action="index.php" method="post">

 Peníze <input type="text" name="amount" id="amount"> <br>

<br>

         CZK na EUR:  <input type="radio" name="switch" value="czk_eur" id="switch"><br>
         EUR na CZK: <input type="radio" name="switch" value="eur_czk" id="switch"><br>

<br>

        <input type="submit" value="odeslat" name="odeslat">

</form>

<?php
} ?>

</body>
</html>