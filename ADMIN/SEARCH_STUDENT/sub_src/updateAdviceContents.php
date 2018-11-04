<?php
session_start();

include("..\..\..\module\dbConnect.php");
include("..\..\..\module\dbContentsEcho.php");

$sql = "UPDATE advice SET contents = '".$_POST[contents]."'
        WHERE user_id = '".$_SESSION[stu_id][0]."'
        ORDER BY no DESC Limit 1";

mysqli_query($conn, $sql);

?>
