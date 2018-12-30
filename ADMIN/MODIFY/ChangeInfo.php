<!DOCTYPE html>
<?php
session_start();
include("..\..\module\url_access_denied.php");
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");


 ?>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>문제수정</title>
     <link rel="stylesheet" href="../css/changeinfo.css">

     <script src="../js/jquery-min.js" charset="utf-8"></script>
   </head>
   <body>
     <div class="wrapper">
       <div class="left">
         <form class="modify_form" action="index.html" method="post">
           <div class="problem_info">
             <?php
               // 문제지 이름
               $book_name = DB_echo("SELECT book_name FROM question_book_name","book_name");
               $book_num = DB_echo("SELECT book_num FROM question_book_name","book_num");

               //문제 유형
               //수 1, 수 2 이런식으로도 선택할 수 있게 해야함

               //문제 세부 유형
               $type_index_name = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE hide=1", "type_index_name");
               $type_index_num = DB_echo("SELECT type_index_num FROM question_type_math_index WHERE hide=1", "type_index_num");
             ?>
             <select class="ALFSO_Subject" name="subject" required>
               <option value="">과목</option>
               <option value="2" >수학</option>

             </select>
             <select class="ALFSO_Grade" name="grade" required>
               <option value="">학년</option>
               <option value="1" >1</option>
               <option value="2" >2</option>
               <option value="3" >3</option>
             </select>
             <select class="ALFSO_Bookname" name="book_name" required>
               <option value="">책이름</option>
               <?php
                 for($idx = 1; $idx <= count($book_name); $idx++)
                 {
                   echo "<option value='".$book_num[$idx-1]."'>".$book_name[$idx-1]."</option>";
                 }
               ?>
               <!-- <option value="0" >1</option>
               <option value="0" >2</option>
               <option value="0" >3</option>
               <option value="0" >4</option>
               <option value="0" >5</option> -->
             </select>
             <select class="ALFSO_type" name="question_type" required>
               <option value="">유형</option>
               <?php
                 for($idx = 1; $idx <= count($type_index_name); $idx++)
                 {
                   echo "<option value='".$type_index_num[$idx-1]."'>".$type_index_name[$idx-1]."</option>";
                 }
               ?>
               <!-- <option value="0" >1</option>
               <option value="0" >2</option>
               <option value="0" >3</option>
               <option value="0" >4</option>
               <option value="0" >5</option> -->
             </select>

           </div>
           <div class="difficult">
             <input type="text" name="difficult" value="" placeholder="원래난이도">
           </div>
           <div class="ALFS_CheckBox row">
             <!-- 최소 1개 이상 선택하도록 해야함. -->
             <li><input type="checkbox" name="type[]" value="0"><span>사고력</span></li>
             <li><input type="checkbox" name="type[]" value="1"><span>이해력</span></li>
             <li><input type="checkbox" name="type[]" value="2"><span>문제해결력</span></li>
             <li><input type="checkbox" name="type[]" value="3"><span>창의력</span></li>
           </div>
           <button type="submit" name="button">수정</button>
         </form>
       </div>
       <div class="right">
         <img src="../ADDING/img/<?php echo $_SESSION['getSelectedTitle']; ?>" alt="">

         
         <div class="정보불러오셈">
           <?php echo "정보불러와서 주석달아놓으셈"; ?>
         </div>


       </div>
     </div>

     <script src="../js/changeinfo.js" charset="utf-8"></script>
   </body>
 </html>
