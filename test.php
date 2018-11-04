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
    <form class="" action="test1.php" method="post">
      <li><input type="checkbox" name="type[]" value="0"><span>사고력</span></li>
      <li><input type="checkbox" name="type[]" value="1"><span>이해력</span></li>
      <li><input type="checkbox" name="type[]" value="2"><span>문제해결력</span></li>
      <li><input type="checkbox" name="type[]" value="3"><span>창의력</span></li>
      <button class="ALFS_Submit" type="submit">추가</button>
    </form>

  </body>
</html>
