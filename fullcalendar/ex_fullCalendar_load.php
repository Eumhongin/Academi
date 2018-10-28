<?php
include("..\module\\dbConnect.php");
include("..\module\\dbContentsEcho.php");

$i=0;


$sql = "SELECT * FROM test_events ORDER BY id";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{

    $data[$i]['id'] = $row["id"];
    $data[$i]['title'] = $row["title"];
    $data[$i]['start'] = $row["start_event"];
    $data[$i]['end'] = $row["end_event"];

  $i++;

  // $id[$i] = $row['id'];
  // $start_event[$i] = $row['start_event'];
  // $end_event[$i] = $row['end_event'];
  // $i++;
}
echo json_encode($data);
 ?>
