<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="fullcalendar-3.9.0/lib/moment.min.js"></script>
    <script type="text/javascript" src="fullcalendar-3.9.0/lib/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          var week=['일','월','화','수','목','금','토'];//날짜출력
          var dayOfWeek = week[new Date('2018-10-22 01:00:00').getDay()];

          function DAY_name(date)
          {
            var dayOfWeek = week[new Date(date).getDay()];
            return dayOfWeek;
          }

          // alert(DAY_name('2018-12-30 01:00:00'));
        });
      </script>
  </head>
  <body>
    <?php
    include("module\dbConnect.php");
    include("module\dbContentsEcho.php");

    date_default_timezone_set('Asia/Seoul');



    $abc = "aaaa1111";

    $sql = "SELECT * FROM advice WHERE user_id = '$abc' ORDER BY registerdate DESC";


    $data[0] = DB_echo($sql, 'contents');
    $data[1] = DB_echo($sql, 'registerdate');

    echo $sql."</br>";
    print_r($data);
    echo "</br>";
    echo $data[0][0]."</br>";
    echo $data[0][1]."</br>";
    echo $data[0][2]."</br>";
    echo $data[0][3]."</br>";
    echo date("Y-m-d" ,strtotime($data[1][0]))."</br>";
    echo date("Y-m-d H:i:s");

    ?>

  </body>
</html>
