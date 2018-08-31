<?php

  function DB_echo($sql, $content)
  {
    $i = 0;
    $result = mysqli_query($GLOBALS['conn'], $sql);
    while($row = mysqli_fetch_array($result))
    {
      $value[$i] = $row[$content];
      $i++;
    }

    return $value;
  }

 ?>
