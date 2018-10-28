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

    //폰번호 부모님번호 주소 계열 넣을 공간 만들어서 다시 구성

    //member_id = $_POST['id'];  //id
    preg_match_all('/[a-z]|[0-9]/', $_POST['id'], $u_id); // 소문자와 숫자를 $u_id[0][0]부터 한글자씩 저장

    $user_id = implode('', $u_id[0]);  // 정규식에 걸려든(?) 녀석들을 합쳐서 $user_id에 저장

    if((strlen($_POST['pw']) < 8) || (strlen($_POST['id']) < 8))
    {
      echo "<script>alert('아이디와 비밀번호를 8자 이상으로 입력바랍니다.');</script>";
      echo "<script>location.href='Login.html';</script>";
    }else if($_POST['id'] != $user_id)
    {
      echo "<script>alert('영어(소문자)와 숫자외의 문자는 이용할 수 없습니다.');</script>";
      echo "<script>location.href='Login.html';</script>";
    }else if($_POST['id'] == $user_id){

      $member_id = $user_id; //id
      $member_pw_salt = genRandom(); //64자리 랜덤 문자열 sort값으로 사용
      $member_pw_hash = hash('sha256', $_POST['pw'].$member_pw_salt, false);//hash
      $member_name = $_POST['name'];//이름
      $member_school_name = $_POST['school_name'];// 학교이름
      $member_school_level = $_POST['school_level'];// 중학교 or 고등학교
      $member_grade = $_POST['grade'];//학년


      if($member_school_name == '임중섭' )
      {
        $member_sort = 0; //선생님
      }else if($member_school_name != '임중섭')
      {
        $member_sort = 1; //학생
      }

      //echo $member_id."</br>".$member_pw_hash."</br>".$member_pw_salt."</br>".$member_name."</br>".$member_school_name."</br>".$member_school_level."</br>".$member_grade."</br>".$member_sort;
      $sql12 = "INSERT INTO member (id, pw_hash, pw_salt, school_name, school_level, grade, stu_tea, name)
      VALUES ('".$member_id."','".$member_pw_hash."','".$member_pw_salt."' ,'".$member_school_name."','".$member_school_level."',$member_grade, $member_sort,'".$member_name."')";

      if(mysqli_query($conn,$sql12) != null)
      {
        echo ("<script>alert('회원가입이 완료되었습니다.');</script>");
        echo ("<script>location.href='index.html';</script>");
      }
      else{
        echo ("<script>alert('ID가 중복됩니다.다른 ID를 입력해주세요.');</script>");
        echo ("<script>location.href='Login.html';</script>");
      }

      mysqli_close($conn);


    }

     ?>
  </body>
</html>
