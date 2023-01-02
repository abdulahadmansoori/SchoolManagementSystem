<?php
class Staff{
    private $conn;
    private $db_table = "staff";
    public $id = 0;
    public $first_name = "";
    public $last_name = "";

    public function __construct($db){
        $this->conn = $db;
    }
    public function getStaff(){
        $sqlQuery = "SELECT * FROM {$this->db_table}";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    public function getStaffById(){
        $sqlQuery = "SELECT * FROM ".$this->db_table." WHERE id = :id";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->id=htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":id", $this->id);
        
        $stmt->execute();
        return $stmt;
    }
    public function createStaff(){
        $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        first_name = :first_name, 
                        last_name = :last_name,
                        gender = :gender,
                        blood_group = :blood_group,
                        email = :email,
                        date_of_birth = :date_of_birth,
                        birth_place = :birth_place,
                        religion = :religion,
                        nationality = :nationality,
                        state = :state,
                        city = :city,
                        address = :address,
                        father_name = :father_name,
                        mother_name = :mother_name,
                        parent_state = :parent_state,
                        parent_city = :parent_city,
                        parent_address = :parent_address,
                        parent_email = :parent_email,
                        parent_contact = :parent_contact,
                        education01 = :education01,
                        education01_year = :education01_year,
                        education01_subject = :education01_subject,
                        education02 = :education02,
                        education02_year = :education02_year,
                        education02_subject = :education02_subject,
                        education03 = :education03,
                        education03_year = :education03_year,
                        education03_subject = :education03_subject,
                        education04 = :education04,
                        education04_year = :education04_year,
                        education04_subject = :education04_subject"
                        ;
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->first_name=htmlspecialchars(strip_tags($this->first_name));
            $this->last_name=htmlspecialchars(strip_tags($this->last_name));
            $this->gender=htmlspecialchars(strip_tags($this->gender));
            $this->blood_group=htmlspecialchars(strip_tags($this->blood_group));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->date_of_birth=htmlspecialchars(strip_tags($this->date_of_birth));
            $this->birth_place=htmlspecialchars(strip_tags($this->birth_place));
            $this->religion=htmlspecialchars(strip_tags($this->religion));
            $this->nationality=htmlspecialchars(strip_tags($this->nationality));
            $this->state=htmlspecialchars(strip_tags($this->state));
            $this->city=htmlspecialchars(strip_tags($this->city));
            $this->address=htmlspecialchars(strip_tags($this->address));
            $this->father_name=htmlspecialchars(strip_tags($this->father_name));
            $this->mother_name=htmlspecialchars(strip_tags($this->mother_name));
            $this->parent_state=htmlspecialchars(strip_tags($this->parent_state));
            $this->parent_city=htmlspecialchars(strip_tags($this->parent_city));
            $this->parent_address=htmlspecialchars(strip_tags($this->parent_address));
            $this->parent_email=htmlspecialchars(strip_tags($this->parent_email));
            $this->parent_contact=htmlspecialchars(strip_tags($this->parent_contact));
            $this->education01=htmlspecialchars(strip_tags($this->education01));
            $this->education01_year=htmlspecialchars(strip_tags($this->education01_year));
            $this->education01_subject=htmlspecialchars(strip_tags($this->education01_subject));
            $this->education02=htmlspecialchars(strip_tags($this->education02));
            $this->education02_year=htmlspecialchars(strip_tags($this->education02_year));
            $this->education02_subject=htmlspecialchars(strip_tags($this->education02_subject));
            $this->education03=htmlspecialchars(strip_tags($this->education03));
            $this->education03_year=htmlspecialchars(strip_tags($this->education03_year));
            $this->education03_subject=htmlspecialchars(strip_tags($this->education03_subject));
            $this->education04=htmlspecialchars(strip_tags($this->education04));
            $this->education04_year=htmlspecialchars(strip_tags($this->education04_year));
            $this->education04_subject=htmlspecialchars(strip_tags($this->education04_subject));
        
            // bind data
            $stmt->bindParam(":first_name", $this->first_name);
            $stmt->bindParam(":last_name", $this->last_name);
            $stmt->bindParam(":gender", $this->gender);
            $stmt->bindParam(":blood_group", $this->blood_group);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":date_of_birth", $this->date_of_birth);
            $stmt->bindParam(":birth_place", $this->birth_place);
            $stmt->bindParam(":religion", $this->religion);
            $stmt->bindParam(":nationality", $this->nationality);
            $stmt->bindParam(":state", $this->state);
            $stmt->bindParam(":city", $this->city);
            $stmt->bindParam(":address", $this->address);
            $stmt->bindParam(":father_name", $this->father_name);
            $stmt->bindParam(":mother_name", $this->mother_name);
            $stmt->bindParam(":parent_state", $this->parent_state);
            $stmt->bindParam(":parent_city", $this->parent_city);
            $stmt->bindParam(":parent_address", $this->parent_address);
            $stmt->bindParam(":parent_email", $this->parent_email);
            $stmt->bindParam(":parent_contact", $this->parent_contact);
            $stmt->bindParam(":education01", $this->education01);
            $stmt->bindParam(":education01_year", $this->education01_year);
            $stmt->bindParam(":education01_subject", $this->education01_subject);
            $stmt->bindParam(":education02", $this->education02);
            $stmt->bindParam(":education02_year", $this->education02_year);
            $stmt->bindParam(":education02_subject", $this->education02_subject);
            $stmt->bindParam(":education03", $this->education03);
            $stmt->bindParam(":education03_year", $this->education03_year);
            $stmt->bindParam(":education03_subject", $this->education03_subject);
            $stmt->bindParam(":education04", $this->education04);
            $stmt->bindParam(":education04_year", $this->education04_year);
            $stmt->bindParam(":education04_subject", $this->education04_subject);
            
            if($stmt->execute()){
               return true;
            }
            return false;
    }
    public function updateStaff(){
        // $sqlQuery = "DELETE FROM ". $this->db"_table ." WHERE id = :id";
        $sqlQuery = "UPDATE ". $this->db_table ." 
                SET 
                    first_name = :first_name, 
                    last_name = :last_name,
                    gender = :gender,
                    blood_group = :blood_group,
                    email = :email,
                    date_of_birth = :date_of_birth,
                    birth_place = :birth_place,
                    religion = :religion,
                    nationality = :nationality,
                    state = :state,
                    city = :city,
                    address = :address,
                    father_name = :father_name,
                    mother_name = :mother_name,
                    parent_state = :parent_state,
                    parent_city = :parent_city,
                    parent_address = :parent_address,
                    parent_email = :parent_email,
                    parent_contact = :parent_contact,
                    education01 = :education01,
                    education01_year = :education01_year,
                    education01_subject = :education01_subject,
                    education02 = :education02,
                    education02_year = :education02_year,
                    education02_subject = :education02_subject,
                    education03 = :education03,
                    education03_year = :education03_year,
                    education03_subject = :education03_subject,
                    education04 = :education04,
                    education04_year = :education04_year,
                    education04_subject = :education04_subject
                WHERE id = :id";

            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->id=htmlspecialchars(strip_tags($this->id));
            $this->first_name=htmlspecialchars(strip_tags($this->first_name));
            $this->last_name=htmlspecialchars(strip_tags($this->last_name));
            $this->gender=htmlspecialchars(strip_tags($this->gender));
            $this->blood_group=htmlspecialchars(strip_tags($this->blood_group));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->date_of_birth=htmlspecialchars(strip_tags($this->date_of_birth));
            $this->birth_place=htmlspecialchars(strip_tags($this->birth_place));
            $this->religion=htmlspecialchars(strip_tags($this->religion));
            $this->nationality=htmlspecialchars(strip_tags($this->nationality));
            $this->state=htmlspecialchars(strip_tags($this->state));
            $this->city=htmlspecialchars(strip_tags($this->city));
            $this->address=htmlspecialchars(strip_tags($this->address));
            $this->father_name=htmlspecialchars(strip_tags($this->father_name));
            $this->mother_name=htmlspecialchars(strip_tags($this->mother_name));
            $this->parent_state=htmlspecialchars(strip_tags($this->parent_state));
            $this->parent_city=htmlspecialchars(strip_tags($this->parent_city));
            $this->parent_address=htmlspecialchars(strip_tags($this->parent_address));
            $this->parent_email=htmlspecialchars(strip_tags($this->parent_email));
            $this->parent_contact=htmlspecialchars(strip_tags($this->parent_contact));
            $this->education01=htmlspecialchars(strip_tags($this->education01));
            $this->education01_year=htmlspecialchars(strip_tags($this->education01_year));
            $this->education01_subject=htmlspecialchars(strip_tags($this->education01_subject));
            $this->education02=htmlspecialchars(strip_tags($this->education02));
            $this->education02_year=htmlspecialchars(strip_tags($this->education02_year));
            $this->education02_subject=htmlspecialchars(strip_tags($this->education02_subject));
            $this->education03=htmlspecialchars(strip_tags($this->education03));
            $this->education03_year=htmlspecialchars(strip_tags($this->education03_year));
            $this->education03_subject=htmlspecialchars(strip_tags($this->education03_subject));
            $this->education04=htmlspecialchars(strip_tags($this->education04));
            $this->education04_year=htmlspecialchars(strip_tags($this->education04_year));
            $this->education04_subject=htmlspecialchars(strip_tags($this->education04_subject));
        
            // bind data
            $stmt->bindParam(":id", $this->id);
            $stmt->bindParam(":first_name", $this->first_name);
            $stmt->bindParam(":last_name", $this->last_name);
            $stmt->bindParam(":gender", $this->gender);
            $stmt->bindParam(":blood_group", $this->blood_group);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":date_of_birth", $this->date_of_birth);
            $stmt->bindParam(":birth_place", $this->birth_place);
            $stmt->bindParam(":religion", $this->religion);
            $stmt->bindParam(":nationality", $this->nationality);
            $stmt->bindParam(":state", $this->state);
            $stmt->bindParam(":city", $this->city);
            $stmt->bindParam(":address", $this->address);
            $stmt->bindParam(":father_name", $this->father_name);
            $stmt->bindParam(":mother_name", $this->mother_name);
            $stmt->bindParam(":parent_state", $this->parent_state);
            $stmt->bindParam(":parent_city", $this->parent_city);
            $stmt->bindParam(":parent_address", $this->parent_address);
            $stmt->bindParam(":parent_email", $this->parent_email);
            $stmt->bindParam(":parent_contact", $this->parent_contact);
            $stmt->bindParam(":education01", $this->education01);
            $stmt->bindParam(":education01_year", $this->education01_year);
            $stmt->bindParam(":education01_subject", $this->education01_subject);
            $stmt->bindParam(":education02", $this->education02);
            $stmt->bindParam(":education02_year", $this->education02_year);
            $stmt->bindParam(":education02_subject", $this->education02_subject);
            $stmt->bindParam(":education03", $this->education03);
            $stmt->bindParam(":education03_year", $this->education03_year);
            $stmt->bindParam(":education03_subject", $this->education03_subject);
            $stmt->bindParam(":education04", $this->education04);
            $stmt->bindParam(":education04_year", $this->education04_year);
            $stmt->bindParam(":education04_subject", $this->education04_subject);
            
            if($stmt->execute()){
               return true;
            }
            return false;
    }

    public function deleteStaff(){
        // $sqlQuery = "SELECT * FROM ". $this->db_table ." WHERE id = ".$this->id;
        // $stmt = $this->conn->prepare($sqlQuery);
        // echo $stmt->execute();
        // die();
        // if($stmt->rowCount()>0){
            $sqlQuery = "DELETE FROM ". $this->db_table ." WHERE id = :id";

            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->id=htmlspecialchars(strip_tags($this->id));
            // $this->last_name=htmlspecialchars(strip_tags($this->last_name));
        
            // bind data
            $stmt->bindParam(":id", $this->id);
            // $stmt->bindParam(":last_name", $this->last_name);
            
            if($stmt->execute()){
               return true;
            }
            return false;
        // }
        // else{
        //     return false;
        // }
    }
}
?>