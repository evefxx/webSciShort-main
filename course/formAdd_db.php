
<?php
    echo 'เพิ่มข้อมูลแล้วนะ';
    include_once("../model/ConDB.php");  
    include_once("../model/Course.php");
    $obj_name = new Course();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  //แอดข้อมูลเข้าฐาน
        // collect value of input field
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        $date = $_POST['date'];
        $price = $_POST['price'];
        echo $id;
        if (empty($name)) {
          echo "Name is empty";
        } else {
          echo $name;
        }
      }

    $rs2 = $obj_name->addCourse($id,$name,$img,$date,$price);
echo $rs2; //การรีข้อมูล


header( "location: ../index.php" );  //คำสั่งโชว์หน้าแรกที่มีข้อมูลเพิ่ม
exit(0);




    // header( "location: ../index.php" );
?>