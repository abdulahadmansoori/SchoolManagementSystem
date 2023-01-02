<?php
class Sections{
    private $conn;
    private $db_table = "section";

    public function __construct($db){
        $this->conn = $db;
    }
    public function getSections(){
        $sqlQuery = "SELECT * FROM {$this->db_table}";
        $stmt = $this->conn->prepare($sqlQuery);
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