
<?php
session_start();
include("module\dbConnect.php");
include("module\dbContentsEcho.php");


// $conn = mysqli_connect("localhost","root","misozium23");
// $sqli = mysqli_select_db($conn,"test");

$wrong = 2;
$total = 10;
$name = 'aaaa1111';
$sql = "SELECT no, image FROM question_image
        WHERE level='5'
        and (type_index_num = '1' or type_index_num = ''
        or type_index_num = '' or type_index_num = '' )
        and (book_num = '3' or book_num = ''
        or book_num = '' or book_num = '')
        and grade = '1' and type1 = '0'
        and type2 = '1' and type3 = '0' and type4 = '0'
        and wrong_student LIKE '%".$name."%'
        order by rand() limit $wrong";

        $i = 0;
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
          $print[$i] = $row['image'];
          $print_num[$i++] = $row['no'];
        }

        $total = $total - $wrong;
        $sql = "SELECT no, image FROM question_image
                WHERE level='5'
                and (type_index_num = '1' or type_index_num = ''
                or type_index_num = '' or type_index_num = '' )
                and (book_num = '3' or book_num = ''
                or book_num = '' or book_num = '')
                and grade = '1' and type1 = '0'
                and type2 = '1' and type3 = '0' and type4 = '0'
                and NOT wrong_student LIKE '%".$name."%'
                order by rand() limit $total";

                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result))
                {
                  $print[$i] = $row['image'];
                  $print_num[$i++] = $row['no'];
                }

        for($idx = 0; $idx < count($print); $idx++)
        {
          echo "<div><img src='ADMIN/ADDING/img/$print[$idx]'></div>";
        }
    ?>
