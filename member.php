<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("module\dbConnect.php");
    include("module\dbContentsEcho.php");
    include("module\\rand_string.php");
    include("module\url_access_denied.php");
    $teacher_num = null;

    function get_token($token)
    {
      $sql = "SELECT * FROM token order by registerdate desc limit 1";
      $get = DB_echo($sql, 'token');

      if($token == $get[0])
      {return 1;}else{return 0;}
    }

    function delete_token()
    {
      $desql = "DELETE FROM token WHERE no = 1";
      mysqli_query($GLOBALS['conn'],$desql);
    }

    function getTeacherNum()
    {
      $sql = "SELECT * FROM member WHERE stu_tea = 0 ORDER BY school_name DESC LIMIT 1";
      $GLOBALS['teacher_num'] = DB_echo($sql, 'school_name');//선생님 번호
    }

    function IDcheck($id)
    {
      $sql = "SELECT id FROM member WHERE id= '$id'";
      $chk = DB_echo($sql, 'id');

      if($chk == null)
      {return 1;}
      else{return 0;}
    }

    function Namecheck($name, $school_name, $school_level, $grade)
    {
      $sql = "SELECT name FROM member
              WHERE name = '".$name."' and school_name = '".$school_name."' and school_level = '".$school_level."' and grade = '".$grade."' ";
      $chk = DB_echo($sql, 'name');

      if($chk == null)
      {return 1;}
      else{return 0;}
    }

    // 선생님들 정보를 받아와서 회원가입 진행
    if($_POST['token'] != null)
    {
      if(get_token($_POST['token']) == 0)
      {
        echo "<script>alert('토큰 값 불일치.');</script>";

        delete_token();

        echo "<script>location.href='ADMIN/SETTING/setting.php';</script>";
      }
      preg_match_all('/[a-z]|[0-9]/', $_POST['id'], $u_id); // 소문자와 숫자를 $u_id[0][0]부터 한글자씩 저장

      $user_id = implode('', $u_id[0]);  // 정규식에 걸려든(?) 녀석들을 합쳐서 $user_id에 저장

      if((strlen($_POST['pass']) < 8) || (strlen($_POST['id']) < 8))
      {
        echo "<script>alert('아이디와 비밀번호를 8자 이상으로 입력바랍니다.');</script>";

        delete_token();

        echo "<script>location.href='ADMIN/SETTING/setting.php';</script>";

      }else if($_POST['id'] != $user_id)
      {
        echo "<script>alert('영어(소문자)와 숫자외의 문자는 이용할 수 없습니다.');</script>";
        delete_token();
        echo "<script>location.href='ADMIN/SETTING/setting.php';</script>";

      }else if($_POST['id'] == $user_id){

        getTeacherNum();

        if(IDcheck($_POST['id']) == 0)
        {

          echo ("<script>alert('ID가 중복됩니다.다른 ID를 입력해주세요.');</script>");
          delete_token();
          // echo $sql12."</br>".$member_id."</br>".$member_pw_hash."</br>".$member_pw_salt."</br>".$member_school_name."</br>".$member_name."</br>".$member_phone."</br>";
          echo "<script>location.href='ADMIN/SETTING/setting.php';</script>";

        }
        else{

          $member_id = $user_id; //id
          $member_pw_salt = genRandom(); //64자리 랜덤 문자열 sort값으로 사용
          $member_pw_hash = hash('sha256', $_POST['pass'].$member_pw_salt, false);//hash
          $member_name = $_POST['name'];//이름
          $member_school_name = $teacher_num[0] + 1;// 학교이름
          // $member_school_name = $_POST['school_name'];// 학교이름
          $member_school_level = 0;// 중학교 or 고등학교
          // $member_school_level = $_POST['school_level'];// 중학교 or 고등학교
          $member_grade = 0;//학년
          // $member_grade = $_POST['grade'];//학년
          $member_sort = 0; //선생님
          $member_phone = $_POST['ph'];




          //echo $member_id."</br>".$member_pw_hash."</br>".$member_pw_salt."</br>".$member_name."</br>".$member_school_name."</br>".$member_school_level."</br>".$member_grade."</br>".$member_sort;
          $sql12 = "INSERT INTO member (id, pw_hash, pw_salt, school_name, school_level, grade, univ, score,stu_tea, name, phone_num, parents_phone_num, address, affiliation, manager_name, team_leader)
          VALUES ('".$member_id."','".$member_pw_hash."','".$member_pw_salt."' ,'".$member_school_name."', '0', '0', '0', '0','0','".$member_name."', $member_phone, '0', 'ok', '매니저', '".$member_name."', '이광진')";

          if(mysqli_query($conn,$sql12) != null)
          {
            delete_token();
            echo ("<script>alert('회원가입이 완료되었습니다.');</script>");
            echo ("<script>location.href='intro';</script>");
          }
          else{
            echo ("<script>alert('ID가 중복됩니다.다른 ID를 입력해주세요.');</script>");
            delete_token();
            echo $sql12."</br>".$member_id."</br>".$member_pw_hash."</br>".$member_pw_salt."</br>".$member_school_name."</br>".$member_name."</br>".$member_phone."</br>";

            // echo "<script>location.href='ADMIN/SETTING/setting.php';</script>";
          }

          mysqli_close($conn);
        }



      }

    }else {//학생 회원가입

      //폰번호 부모님번호 주소 계열 넣을 공간 만들어서 다시 구성

      //member_id = $_POST['id'];  //id
      preg_match_all('/[a-z]|[0-9]/', $_POST['id'], $u_id); // 소문자와 숫자를 $u_id[0][0]부터 한글자씩 저장

      $user_id = implode('', $u_id[0]);  // 정규식에 걸려든(?) 녀석들을 합쳐서 $user_id에 저장

      if((strlen($_POST['pw']) < 8) || (strlen($_POST['id']) < 8))
      {
        echo "<script>alert('아이디와 비밀번호를 8자 이상으로 입력바랍니다.');</script>";
        echo "<script>location.href='ADMIN/SEARCH_STUDENT/stu_new.php';</script>";
      }else if($_POST['id'] != $user_id)
      {
        echo "<script>alert('영어(소문자)와 숫자외의 문자는 이용할 수 없습니다.');</script>";
        echo "<script>location.href='ADMIN/SEARCH_STUDENT/stu_new.php';</script>";
      }else if($_POST['id'] == $user_id){

        if(IDcheck($_POST['id']) == 0)
        {
          echo ("<script>alert('ID가 중복됩니다.다른 ID를 입력해주세요.');</script>");
          // delete_token();
          // echo $sql12."</br>".$member_id."</br>".$member_pw_hash."</br>".$member_pw_salt."</br>".$member_school_name."</br>".$member_name."</br>".$member_phone."</br>";
          echo ("<script>location.href='ADMIN/SEARCH_STUDENT/stu_new.php';</script>");

        }else if(Namecheck($_POST['name'], $_POST['school_name'], $_POST['school_level'], $_POST['grade']) == 0)
        {
          echo ("<script>alert('같은 학교, 같은 학년에 동명이인이 존재합니다.');</script>");

          // echo $sql12."</br>".$member_id."</br>".$member_pw_hash."</br>".$member_pw_salt."</br>".$member_school_name."</br>".$member_name."</br>".$member_phone."</br>";
          echo "<script>location.href='ADMIN/SEARCH_STUDENT/stu_new.php';</script>";

        }else{

          $member_id = $user_id; //id
          $member_pw_salt = genRandom(); //64자리 랜덤 문자열 sort값으로 사용
          $member_pw_hash = hash('sha256', $_POST['pw'].$member_pw_salt, false);//hash
          $member_name = $_POST['name'];//이름
          $member_school_name = $_POST['school_name'];// 학교이름
          $member_school_level = $_POST['school_level'];// 중학교 or 고등학교
          $member_grade = $_POST['grade'];//학년
          $member_phone = $_POST['phone_num']; //폰번호
          $member_parents_phone = $_POST['parents_phone_num'];//보호자 폰번호
          $member_address = $_POST['address']; //주소
          $member_affiliation = $_POST['affiliation']; //계열
          $member_univ = $_POST['univ']; //목표대학
          $member_score = $_POST['score'];  //현재 성적
          $manager_name = $_POST['manager_name']; //매니저 이름
          $team_leader = $_POST['team_leader']; //팀장
          $member_sort = 1; //학생




          //echo $member_id."</br>".$member_pw_hash."</br>".$member_pw_salt."</br>".$member_name."</br>".$member_school_name."</br>".$member_school_level."</br>".$member_grade."</br>".$member_sort;
          $sql12 = "INSERT INTO member (id, pw_hash, pw_salt, school_name, school_level, grade,
            univ, score, stu_tea, name, phone_num, parents_phone_num, address, affiliation, manager_name, team_leader)
            VALUES ('".$member_id."',  '".$member_pw_hash."',   '".$member_pw_salt."' ,
              '".$member_school_name."',   '".$member_school_level."',   $member_grade,
              '".$mamber_univ."',   '".$member_score."',   $member_sort,
              '".$member_name."',       '".$member_phone."',    '".$member_parents_phone."',
              '".$member_address."', '".$member_affiliation."', '".$manager_name."', '".$team_leader."')";

              if(mysqli_query($conn,$sql12) != null)
              {
                echo ("<script>alert('회원가입이 완료되었습니다.');</script>");
                echo ("<script>location.href='ADMIN/SEARCH_STUDENT/stu_new.php';</script>");
              }
              else{
                echo ("<script>alert('ID생성 오류 입력 값 확인 바람.');</script>");
                echo ("<script>location.href='ADMIN/SEARCH_STUDENT/stu_new.php';</script>");
              }

              mysqli_close($conn);

        }



      }
    }








     ?>
  </body>
</html>
