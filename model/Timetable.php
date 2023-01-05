<?php
class Timetable{
    private $conn;
    private $db_table = "time_table";
    public $class_id=0;
    public $sec_id=0;
    public function __construct($db){
        $this->conn = $db;
    }
    public function getClassTimetable(){
        // $db_timetable = "time_table";
        $sqlQuery = "SELECT * FROM ".$this->db_table." WHERE class_id = :class_id AND sec_id = :sec_id";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->class_id=htmlspecialchars(strip_tags($this->class_id));
        $this->sec_id=htmlspecialchars(strip_tags($this->sec_id));

        $stmt->bindParam(":class_id", $this->class_id);
        $stmt->bindParam(":sec_id", $this->sec_id);
        $stmt->execute();
        return $stmt;
    }
}
?>