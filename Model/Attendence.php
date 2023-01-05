<?php
class Attendence{
    private $conn;
    private $db_table = "faculty_attendance";
    public $fac_id;
    public function __construct($db){
        $this->conn = $db;
    }
    public function getEmployeeAttendance(){
        $sqlQuery = "SELECT * FROM {$this->db_table} where fac_id = :fac_id";
        // "SELECT status, count(status) FROM `faculty_attendance` WHERE fac_id = :fac_id group by status";
        $stmt = $this->conn->prepare($sqlQuery);    
        $this->fac_id=htmlspecialchars(strip_tags($this->fac_id));

        $stmt->bindParam(":fac_id", $this->fac_id);
        $stmt->execute();
        return $stmt;
    }
}