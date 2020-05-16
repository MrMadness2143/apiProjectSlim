<?php
class stats
{
    function __construct($db){
        $this->conn = $db;
    }

    function read(){
        if($this->statID){
            $stmt = $this->conn->prepare("SELECT * FROM stats WHERE statID= ?");
            $stmt->bind+param("i", $this->id);
        } else {
            $stmt = $this->conn->prepare("SELECT * FROM ");
        }
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }


}