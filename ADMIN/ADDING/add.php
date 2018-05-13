<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php //공부방 IP : 220.89.2.113 // 독서실 커뮤니티 인포룸을 바라본 상태에서 오른쪽 IP :192.168.61.141
      $conn = mysqli_connect("192.168.61.141","root","misozium23","aca_db","3306");
      $db_select = mysqli_select_db($conn,"aca_db"); //데이터베이스에 연결

      /*if ($conn->connect_error) {
      ie("Connection failed: " . $conn->connect_error);
       }
       echo "Connected successfully";*/ // DB연결 확인 하는 구문


      $sql = "SELECT * from member";
      //$result = $conn->query($sql);
      $result = mysqli_query($conn, $sql);
      //$qarray = mysqli_fetch_array($result);
      //$row = $result->fetch_array(MYSQLI_ASSOC);

    /*  while( $row = mysqli_fetch_array($result))
     {

       echo "$row[id] ";

     }
*/

    /*  while($row = mysqli_fetch_array($result))
      {
        echo $row['aaaa'];
      }

      mysqli_free_result($question);
*/
      mysqli_close($conn);
      echo "되나안되나 말좀해라 젭라";
     ?>
    문제추가
    <button onclick="location.href = '../../index.php'">로고</button>

    <select name="book_name">
    <option value="">책 이름</option>
    <option value="">학생</option>
    <option value="회사원">회사원</option>
    <option value="기타">기타</option>
    </select>


  </body>
</html>
