<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.Tous les paramètres doivent avoir une valeur par défaut.</p>
      <?php function somme($a, $b, $c)
      {
        if (is_int($a) && is_int($b) && is_int($c)) {
          echo $a + $b + $c;
        } else {
          echo "Verifier nombres";
        }
      }
      $a = rand(1, 100);
      $b = rand(1, 100);
      $c = rand(1, 100);
      ?>
      <p><?php echo "Le prmier nombre est ".$a."."; ?></p>
      <p><?php echo "Le deuxieme nombre est ".$b."."; ?></p>
      <p><?php echo "Le troisieme nombre est ".$c."."; ?></p>
      <p><?php echo somme($a, $b, $c)." est la somme de ces 3 nombres."; ?></p>
    </body>
</html>
