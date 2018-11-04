<?php
session_start();

include("..\..\..\module\dbConnect.php");
include("..\..\..\module\dbContentsEcho.php");

$sql = "UPDATE advice SET contents = '".$_POST[temp]."'
        WHERE user_id = '".$_SESSION[stu_id][0]."'";

        

?>
