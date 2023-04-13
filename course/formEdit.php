<?php

include_once("../model/ConDB.php");
include_once("../model/Course.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$cs_id = htmlspecialchars($_GET["cs_id"]);
// echo $cs_id;
$obj_name = new Course();
$rs2 = $obj_name->getCourseById($cs_id);
// echo $rs2['cs_id']
?>
<div class="container" style="">
        <div class="row">
            <div class="col-md-4"> <br>
                <h4>ฟอร์มเพิ่มข้อมูล</h4>
                <form action="edit.php" method="post">
                    <div class="mb-1">
                        <input name="cs_id" type="text" id="ID" value="<?php echo $rs2['cs_id'];?>">
                    <div class="mb-1">
                        <label for="name" class="col-sm-2 col-form-label"> ชื่อ : </label>
                        <div class="col-sm-10">
                            <input type="text" name="cs_name" id="cs_name" class="form-control" required minlength="1"
                                value="<?php echo $rs2['cs_name'] ?>">
                        </div>
                    </div>
                    <div class="mb-1">
                        <label for="name" class="col-sm-2 col-form-label"> รูปภาพ : </label>
                        <div class="col-sm-10">
                            <input type="text" name="cs_img" value="<?php echo $rs2['cs_img'];?>" class="form-control" required minlength="1"
                                placeholder="รูปภาพ">
                        </div>
                    </div>
                    <div class="mb-1">
                        <label for="name" class="col-sm-2 col-form-label"> วันที่ : </label>
                        <div class="col-sm-10">
                            <input type="text" name="cs_date" value="<?php echo $rs2['cs_date'];?>" class="form-control" required minlength="3"
                                placeholder="วันที่">
                        </div>
                    </div>
                    <div class="mb-1">
                        <label for="name" class="col-sm-4 col-form-label"> ค่าลงทะเบียน : </label>
                        <div class="col-sm-10">
                            <input type="text" name="cs_wallet" value="<?php echo $rs2['cs_wallet'];?>" class="form-control" required minlength="3"
                                placeholder="ค่าลงทะเบียน">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>