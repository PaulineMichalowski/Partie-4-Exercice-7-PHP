<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 7</title>
  </head>
  <body>
    <?php
    $age = 23;
    $gender = 'Homme';
    function genderAge($number1, $text1) {
      if($number1 > 18 && $text1 == 'Homme') {
        echo 'Vous êtes un homme et vous êtes majeur';
      } elseif($number1 < 18 && $text1 == 'Homme') {
        echo 'Vous êtes un homme et vous êtes mineur';
      } elseif($number1 > 18 && $text1 == 'Femme') {
        echo 'Vous êtes une femme et vous êtes majeure';
      } elseif($number1 < 18 && $text1 == 'Femme') {
        echo 'Vous êtes une femme et vous êtes mineure';
      }
    }
    genderAge($age, $gender);
    ?>
  </body>
</html>
