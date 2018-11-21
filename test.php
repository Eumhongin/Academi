
<?php
session_start();
include("module\dbConnect.php");
include("module\dbContentsEcho.php");


$get = DB_echo("SELECT * FROM question_list WHERE no= '24'",'question_num');

$get[0] = explode("|", $get[0]);


print_r($get);

echo "</br>".count($get[0])."</br>";

for($idx = 1; $idx < count($get[0]); $idx++)
{

  echo "</br>".$get[0][$idx];
}

       ?>
