
<?php
session_start();
include("module\dbConnect.php");
include("module\dbContentsEcho.php");


// $conn = mysqli_connect("localhost","root","misozium23");
// $sqli = mysqli_select_db($conn,"test");


$sql = "SELECT no, image FROM question_image WHERE level='5' and (type_index_num = '1' or type_index_num = '3' or type_index_num = '' or type_index_num = '' ) and (book_num = '3' or book_num = '3' or book_num = '' or book_num = '') and grade = '1' and type1 = '0' and type2 = '1' and type3 = '0' and type4 = '0' order by rand() limit 10";
$print_num = DB_echo($sql,'no');
print_r($print_num);
echo"</br>";echo"</br>";echo"</br>";
$array = [37 ,87 ,51 ,23];


       ?>
