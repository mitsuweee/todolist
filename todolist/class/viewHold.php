<?php
class viewHold extends config{
    public $id;
    public $reason;

    public function __construct($id =null, $reason=null){
        $this->id= $id;
        $this->reason= $reason;
    }

    public function holdTask(){
        $con = $this->con();
        $sql = "UPDATE `tbl_todolist` SET `status`='ON HOLD', `hold_reason` = '$this->reason' WHERE `id`='$this->id'";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;
        }
        else{
            return false;
        }

    }
}
?>