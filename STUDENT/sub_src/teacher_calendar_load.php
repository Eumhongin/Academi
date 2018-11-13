<?php
// session_start();
//
// include("..\..\module\EVENTdbConnect.php");
// include("..\..\module\dbConnect.php");
// include("..\..\module\dbContentsEcho.php");


$data_idx=0;
$data=null;
$teacher_id =null;

// for($i = 0; $i < 6; $i++)
// {
//   $day_sql = "SELECT * FROM member WHERE school_name = '".$i."'";
//   $teacher_id[$i] = DB_echo($day_sql, 'id');
// }


// -----------
  $day_sql = "SELECT * FROM member WHERE stu_tea = 0";
  $teacher_id = DB_echo($day_sql, 'id');
  $teacher_num = DB_echo($day_sql, 'school_name');//선생님 번호


// $get_num = "SELECT * FROM member WHERE stu_tea = 0";
// print_r($teacher_id);

function getEventData($sql)
{
  // $week=['sun','mon','tue','wed','thu','fri','sat'];
  $result = mysqli_query($GLOBALS['conn2'], $sql);

  while($row = mysqli_fetch_array($result))
  {
    $GLOBALS['data'][$GLOBALS['data_idx']]['id'] = $row["no"];
    $GLOBALS['data'][$GLOBALS['data_idx']]['title'] = $row["title"];
    // $GLOBALS['data'][$GLOBALS['data_idx']]['title'] = '***';
    $GLOBALS['data'][$GLOBALS['data_idx']]['start'] = $row["start_event"];
    $GLOBALS['data'][$GLOBALS['data_idx']]['end'] = $row["end_event"];
    $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = $row["object"];

    switch ($GLOBALS['data'][$GLOBALS['data_idx']]['color']) {
      case 0: //국
        // $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = '#FAAC58';
        $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = '#FF00BF';
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
        // $GLOBALS['data'][$GLOBALS['data_idx']]['color'] = '#378006';
        break;
    }
    $GLOBALS['data_idx']++;
  }
  return $week;
}




function setSQL($num)
{
  $day = array('sun','mon','tue','wed','thu','fri','sat');
    for($j=0; $j < 7; $j++)
    {
      $day_sql = "SELECT * FROM $day[$j] WHERE user_id = '".$GLOBALS['teacher_id'][$num]."'";
      $event = getEventData($day_sql);
    }


}
// -----
// setSQL('2');


// $sun = getEventData($sun_sql);
// $mon = getEventData($mon_sql);
// $tue = getEventData($tue_sql);
// $wed = getEventData($wed_sql);
// $thu = getEventData($thu_sql);
// $fri = getEventData($fri_sql);
// $sat = getEventData($sat_sql);

// -----
// echo json_encode($data);
 ?>
