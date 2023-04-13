<?php
  include_once "../model/ConDB.php";
  include_once "../model/Course.php";

  //สร้างตัวแปร
  $cs_id = $_POST['cs_id'];
  $cs_name = $_POST['cs_name'];
  $cs_img = $_POST['cs_img'];
  $cs_date = $_POST['cs_date'];
  $cs_wallet = $_POST['cs_wallet'];

  //เรียกใช้
  $obj_name=new Course();
$rs2 = $obj_name->editCourse($cs_id, $cs_name,$cs_img, $cs_date, $cs_wallet);
header( "location: ../index.php" );
exit(0);
?>