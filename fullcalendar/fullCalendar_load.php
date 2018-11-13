<?php
  session_start();
  include("..\module\EVENTdbConnect.php");

  $data_idx=0;
  $data=null;
  function getEventData($sql)
  {
    // $week=['sun','mon','tue','wed','thu','fri','sat'];
    $result = mysqli_query($GLOBALS['conn2'], $sql);
    while($row = mysqli_fetch_array($result))
    {
      $GLOBALS['data'][$GLOBALS['data_idx']]['id'] = $row["no"];
      $GLOBALS['data'][$GLOBALS['data_idx']]['title'] = $row["title"];
      $GLOBALS['data'][$GLOBALS['data_idx']]['start'] = $row["start_event"];
      $GLOBALS['data'][$GLOBALS['data_idx']]['end'] = $row["end_event"];
      $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = $row["object"];

      switch ($GLOBALS['data'][$GLOBALS['data_idx']]['color']) {
        case 0: //국
          $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = '#FAAC58';
          break;
        case 1: //영
          $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = '#D0FA58';
          break;
        case 2: //수
          $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = '#58FAF4';
          break;
        case 3: //사
          $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = '#8258FA';
          break;
        case 4: //과
          $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = '#848484';
          break;
        case 5: //선생님듦만 사용 기타
          $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = '#8CBA8B';
          break;
        case 6: //학생이 선생한테 예약
          $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = '#6E6E6E';
          break;

        default:
          // code...
          break;
      }
        // $week[$day_name][$i]['id'] = $row["id"];
        // $week[$day_name][$i]['title'] = $row["title"];
        // $week[$day_name][$i]['start'] = $row["start_event"];
        // $week[$day_name][$i]['end'] = $row["end_event"];

      $GLOBALS['data_idx']++;
    }
    return $week;
  }



  $sun_sql = "SELECT * FROM sun WHERE user_id='".$_SESSION[stu_id][0]."'";
  $mon_sql = "SELECT * FROM mon WHERE user_id='".$_SESSION[stu_id][0]."'";
  $tue_sql = "SELECT * FROM tue WHERE user_id='".$_SESSION[stu_id][0]."'";
  $wed_sql = "SELECT * FROM wed WHERE user_id='".$_SESSION[stu_id][0]."'";
  $thu_sql = "SELECT * FROM thu WHERE user_id='".$_SESSION[stu_id][0]."'";
  $fri_sql = "SELECT * FROM fri WHERE user_id='".$_SESSION[stu_id][0]."'";
  $sat_sql = "SELECT * FROM sat WHERE user_id='".$_SESSION[stu_id][0]."'";

  $sun = getEventData($sun_sql);
  $mon = getEventData($mon_sql);
  $tue = getEventData($tue_sql);
  $wed = getEventData($wed_sql);
  $thu = getEventData($thu_sql);
  $fri = getEventData($fri_sql);
  $sat = getEventData($sat_sql);


  // $result = mysqli_query($conn, $sql);
  // while($row = mysqli_fetch_array($result))
  // {
  //
  //     $data[$i]['id'] = $row["id"];
  //     $data[$i]['title'] = $row["title"];
  //     $data[$i]['start'] = $row["start_event"];
  //     $data[$i]['end'] = $row["end_event"];
  //
  //   $i++;
  //
  //   // $id[$i] = $row['id'];
  //   // $start_event[$i] = $row['start_event'];
  //   // $end_event[$i] = $row['end_event'];
  //   // $i++;
  // }
  echo json_encode($data);
 ?>
