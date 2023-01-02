<?php
class Classes{
    private $conn;
    private $db_table = "class";

    public function __construct($db){
        $this->conn = $db;
    }
    public function getClasses(){
        $sqlQuery = "SELECT * FROM {$this->db_table}";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    public function getClassTimetable(){
        $db_timetable = "time_table";
        $sqlQuery = "SELECT * FROM ".$db_timetable." WHERE class_id = :class_id AND sec_id = :sec_id";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->applied_class=htmlspecialchars(strip_tags($this->class_id));
        $this->sec_id=htmlspecialchars(strip_tags($this->sec_id));

        $stmt->bindParam(":class_id", $this->class_id);
        $stmt->bindParam(":sec_id", $this->sec_id);
        $stmt->execute();
        return $stmt;
    }
    // public function getStudentById(){
    //     $sqlQuery = "SELECT * FROM ".$this->db_table." WHERE id = :id";
    //     $stmt = $this->conn->prepare($sqlQuery);
    //     $this->id=htmlspecialchars(strip_tags($this->id));

    //     $stmt->bindParam(":id", $this->id);

    //     $stmt->execute();
    //     return $stmt;
    // }
}
?>