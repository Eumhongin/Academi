<?php

  function DB_echo($sql, $content)
  {
    $i = 0;
    $result = mysqli_query($GLOBALS['conn'], $sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
    {
      $value[$i] = $row[$content];
      $i++;
    }

    return $value;
  }



  function getLastField($sql)
  {
    $result = mysqli_query($GLOBALS['conn'], $sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH))
    {
      $value[$i] = $row['Field'];
      $i++;
    }

    $get = $value[$i - 7];
    return $get;
  }

 ?>
