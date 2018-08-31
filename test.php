<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("module\dbConnect.php");
    include("module\dbContentsEcho.php");

    $sql1 = "SELECT * FROM member WHERE id='quhb2455'";

    $pw_salt = DB_echo($sql1,'pw_salt');
    echo "salt : ".$pw_salt."</br>";
    $pw_hash = hash('sha256','quhb2455'.$pw_salt[0], false);
    echo "hash : ".$pw_hash."</br>";

    $pw_check = DB_echo($sql1,'pw_hash');
    echo $pw_check[0]."</br>";
    if($pw_check[0] == $pw_hash)
    {

      echo "ok";
    }
    ?>

  </body>
</html>
