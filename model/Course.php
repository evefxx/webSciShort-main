<?php
class Course{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
        // echo $con;
    }

    public function getCourse()
    {
        $sql = "SELECT * FROM sci_cs";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }
    public function getCourseById($cs_id)
    {
        $sql = "SELECT * FROM `sci_cs` WHERE cs_id = ".$cs_id ;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            // echo ($result);
            return $result;
        }else {
            return false;
        }
    }

    // public function getCoursePro($pro_id)
    // {
    //     $sql = "SELECT * FROM agency WHERE `agency_pro_id` = '". $pro_id ."'";
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         $result = $query->fetchAll(PDO::FETCH_ASSOC);
    //         return $result;
    //     }else {
    //         return false;
    //     }
    // }

    // public function getAgencyID($a_id)
    // {
    //     $sql = "SELECT * FROM agency where agency_id=".$a_id;
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         $result = $query->fetch(PDO::FETCH_ASSOC);
    //         return $result;
    //     }else {
    //         return false;
    //     }
    // }


    //แอดข้อมูลเข้าฐาน ดึงจากฐานข้อมูลมาใช้
    // INSERT INTO `sci_cs` (`cs_id`, `cs_name`, `cs_img`, `cs_date`, `cs_wallet`) VALUES ('25', 'การอร่อย', 'images/17.png', '12/1/2023', '2,000');

    public function addCourse($id, $name, $img, $date,$price)
    {
        // $sql = "INSERT INTO `agency` (`agency_id`, `agency_name`, `agency_context`, `agency_pic`, `agency_location`, `agency_pro_id`) VALUES (NULL, '$a_name', '$a_context', '$a_pic', '$a_location', '$a_pro');";
        $sql = "INSERT INTO `sci_cs` (`cs_id`, `cs_name`, `cs_img`, `cs_date`, `cs_wallet`) VALUES ('$id', '$name', '$img', '$date', '$price');";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }
    public function editCourse($cs_id, $cs_name,$cs_img,$cs_date,$cs_wallet)
    {
        // $sql = "INSERT INTO `agency` (`agency_id`, `agency_name`, `agency_context`, `agency_pic`, `agency_location`, `agency_pro_id`) VALUES (NULL, '$a_name', '$a_context', '$a_pic', '$a_location', '$a_pro');";
        $sql = " UPDATE `sci_cs` SET cs_name='$cs_name'WHERE cs_id='$cs_id'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function delCourse($c_id)
    {
        $sql = "DELETE FROM `sci_cs` WHERE `cs_id`='".$c_id."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    // public function editCourse($a_id, $a_name, $a_context, $a_pic, $a_location)
    // {
    //     $sql = "UPDATE `agency` SET `agency_name` = '". $a_name ."', `agency_context` = '". $a_context ."', `agency_pic` = '". $a_pic ."', `agency_location` = '". $a_location ."' WHERE `agency_id` = '". $a_id ."'";
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         return true;
    //     }else {
    //         return false;
    //     }
    // }
	
}
?>