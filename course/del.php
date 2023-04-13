<?php

$c_id = $_GET["cs_id"];
include_once("../model/ConDB.php");
include_once("../model/Course.php");
// echo $cs_id;
$obj_name = new Course();
$rs2 = $obj_name->delCourse($c_id);
// echo $rs2['cs_id']
 header( "location: ../index.php" );
 exit(0);
?>