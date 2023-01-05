<?php
class Students{
    private $conn;
    private $db_table = "students";
    public $id = 0;
    public $first_name = "";
    public $last_name = "";
    public $gender="";
    public $blood_group="";
    public $email="";
    public $DOB="";
    public $birth_place="";
    public $religion="";
    public $nationality="";
    public $state="";
    public $city="";
    public $address="";
    public $father_name="";
    public $mother_name="";
    public $parent_state="";
    public $parent_city="";
    public $parent_address="";
    public $parent_email="";
    public $parent_contact="";
    public $guardian_name="";
    public $guardian_state="";
    public $guardian_city="";
    public $guardian_address="";
    public $guardian_email="";
    public $guardian_contact="";
    public $previous_school_name="";
    public $previous_school_state="";
    public $previous_school_city="";
    public $previous_school_address="";
    public $last_class="";
    public $last_class_year="";
    public $applied_class;
    public $sec_id;

    public function __construct($db){
        $this->conn = $db;
    }
    public function getStudents(){
        $sqlQuery = "SELECT * FROM {$this->db_table}";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    public function getStudentById(){
        $sqlQuery = "SELECT * FROM ".$this->db_table." WHERE id = :id";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->id=htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":id", $this->id);

        $stmt->execute();
        return $stmt;
    }
    public function getClassStudents(){
        $sqlQuery = "SELECT * FROM ".$this->db_table." WHERE applied_class = :applied_class AND sec_id = :sec_id";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->applied_class=htmlspecialchars(strip_tags($this->applied_class));
        $this->sec_id=htmlspecialchars(strip_tags($this->sec_id));

        $stmt->bindParam(":applied_class", $this->applied_class);
        $stmt->bindParam(":sec_id", $this->sec_id);

        $stmt->execute();
        return $stmt;
    }
    public function createStudent(){
        $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        first_name = :first_name, 
                        last_name = :last_name,
                        gender = :gender,
                        blood_group = :blood_group,
                        email = :email,
                        DOB = :DOB,
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
                        guardian_name = :guardian_name,
                        guardian_state = :guardian_state,
                        guardian_city = :guardian_city,
                        guardian_address = :guardian_address,
                        guardian_email = :guardian_email,
                        guardian_contact = :guardian_contact,
                        previous_school_name = :previous_school_name,
                        previous_school_state = :previous_school_state,
                        previous_school_city = :previous_school_city,
                        previous_school_address = :previous_school_address,
                        last_class = :last_class,
                        last_class_year = :last_class_year,
                        applied_class = :applied_class,
                        sec_id = :sec_id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->first_name=htmlspecialchars(strip_tags($this->first_name));
            $this->last_name=htmlspecialchars(strip_tags($this->last_name));
            $this->gender=htmlspecialchars(strip_tags($this->gender));
            $this->blood_group=htmlspecialchars(strip_tags($this->blood_group));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->DOB=htmlspecialchars(strip_tags($this->DOB));
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
            $this->guardian_name=htmlspecialchars(strip_tags($this->guardian_name));
            $this->guardian_state=htmlspecialchars(strip_tags($this->guardian_state));
            $this->guardian_city=htmlspecialchars(strip_tags($this->guardian_city));
            $this->guardian_address=htmlspecialchars(strip_tags($this->guardian_address));
            $this->guardian_email=htmlspecialchars(strip_tags($this->guardian_email));
            $this->guardian_contact=htmlspecialchars(strip_tags($this->guardian_contact));
            $this->previous_school_name=htmlspecialchars(strip_tags($this->previous_school_name));
            $this->previous_school_state=htmlspecialchars(strip_tags($this->previous_school_state));
            $this->previous_school_city=htmlspecialchars(strip_tags($this->previous_school_city));
            $this->previous_school_address=htmlspecialchars(strip_tags($this->previous_school_address));
            $this->last_class=htmlspecialchars(strip_tags($this->last_class));
            $this->last_class_year=htmlspecialchars(strip_tags($this->last_class_year));
            $this->applied_class=htmlspecialchars(strip_tags($this->applied_class));
            $this->sec_id=htmlspecialchars(strip_tags($this->sec_id));
        
            // bind data
            $stmt->bindParam(":first_name", $this->first_name);
            $stmt->bindParam(":last_name", $this->last_name);
            $stmt->bindParam(":gender", $this->gender);
            $stmt->bindParam(":blood_group", $this->blood_group);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":DOB", $this->DOB);
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
            $stmt->bindParam(":guardian_name", $this->guardian_name);
            $stmt->bindParam(":guardian_state", $this->guardian_state);
            $stmt->bindParam(":guardian_city", $this->guardian_city);
            $stmt->bindParam(":guardian_address", $this->guardian_address);
            $stmt->bindParam(":guardian_email", $this->guardian_email);
            $stmt->bindParam(":guardian_contact", $this->guardian_contact);
            $stmt->bindParam(":previous_school_name", $this->previous_school_name);
            $stmt->bindParam(":previous_school_state", $this->previous_school_state);
            $stmt->bindParam(":previous_school_city", $this->previous_school_city);
            $stmt->bindParam(":previous_school_address", $this->previous_school_address);
            $stmt->bindParam(":last_class", $this->last_class);
            $stmt->bindParam(":last_class_year", $this->last_class_year);
            $stmt->bindParam(":applied_class", $this->applied_class);
            $stmt->bindParam(":sec_id", $this->sec_id);

            if($stmt->execute()){
               return true;
            }
            return false;
    }
    public function updateStudent(){
        // $sqlQuery = "DELETE FROM ". $this->db"_table ." WHERE id = :id";
        $sqlQuery = "UPDATE ". $this->db_table ." 
            SET 
                first_name = :first_name, 
                last_name = :last_name,
                gender = :gender,
                blood_group = :blood_group,
                email = :email,
                DOB = :DOB,
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
                guardian_name = :guardian_name,
                guardian_state = :guardian_state,
                guardian_city = :guardian_city,
                guardian_address = :guardian_address,
                guardian_email = :guardian_email,
                guardian_contact = :guardian_contact,
                previous_school_name = :previous_school_name,
                previous_school_state = :previous_school_state,
                previous_school_city = :previous_school_city,
                previous_school_address = :previous_school_address,
                last_class = :last_class,
                last_class_year = :last_class_year,
                applied_class = :applied_class,
                sec_id = :sec_id
                WHERE id = :id";

            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->id=htmlspecialchars(strip_tags($this->id));
            $this->first_name=htmlspecialchars(strip_tags($this->first_name));
            $this->last_name=htmlspecialchars(strip_tags($this->last_name));
            $this->gender=htmlspecialchars(strip_tags($this->gender));
            $this->blood_group=htmlspecialchars(strip_tags($this->blood_group));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->DOB=htmlspecialchars(strip_tags($this->DOB));
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
            $this->guardian_name=htmlspecialchars(strip_tags($this->guardian_name));
            $this->guardian_state=htmlspecialchars(strip_tags($this->guardian_state));
            $this->guardian_city=htmlspecialchars(strip_tags($this->guardian_city));
            $this->guardian_address=htmlspecialchars(strip_tags($this->guardian_address));
            $this->guardian_email=htmlspecialchars(strip_tags($this->guardian_email));
            $this->guardian_contact=htmlspecialchars(strip_tags($this->guardian_contact));
            $this->previous_school_name=htmlspecialchars(strip_tags($this->previous_school_name));
            $this->previous_school_state=htmlspecialchars(strip_tags($this->previous_school_state));
            $this->previous_school_city=htmlspecialchars(strip_tags($this->previous_school_city));
            $this->previous_school_address=htmlspecialchars(strip_tags($this->previous_school_address));
            $this->last_class=htmlspecialchars(strip_tags($this->last_class));
            $this->last_class_year=htmlspecialchars(strip_tags($this->last_class_year));
            $this->applied_class=htmlspecialchars(strip_tags($this->applied_class));
            $this->sec_id=htmlspecialchars(strip_tags($this->sec_id));
        
            // bind data
            $stmt->bindParam(":id", $this->id);
            $stmt->bindParam(":first_name", $this->first_name);
            $stmt->bindParam(":last_name", $this->last_name);
            $stmt->bindParam(":gender", $this->gender);
            $stmt->bindParam(":blood_group", $this->blood_group);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":DOB", $this->DOB);
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
            $stmt->bindParam(":guardian_name", $this->guardian_name);
            $stmt->bindParam(":guardian_state", $this->guardian_state);
            $stmt->bindParam(":guardian_city", $this->guardian_city);
            $stmt->bindParam(":guardian_address", $this->guardian_address);
            $stmt->bindParam(":guardian_email", $this->guardian_email);
            $stmt->bindParam(":guardian_contact", $this->guardian_contact);
            $stmt->bindParam(":previous_school_name", $this->previous_school_name);
            $stmt->bindParam(":previous_school_state", $this->previous_school_state);
            $stmt->bindParam(":previous_school_city", $this->previous_school_city);
            $stmt->bindParam(":previous_school_address", $this->previous_school_address);
            $stmt->bindParam(":last_class", $this->last_class);
            $stmt->bindParam(":last_class_year", $this->last_class_year);
            $stmt->bindParam(":applied_class", $this->applied_class);
            $stmt->bindParam(":sec_id", $this->sec_id);
            
            if($stmt->execute()){
               return true;
            }
            return false;
    }
    public function deleteStudent(){
        // $sqlQuery = "SELECT * FROM ". $this->db_table ." WHERE id = ".$id;
        // $stmt = $this->conn->prepare($sqlQuery);
        // echo $stmt->execute();
        // // die();
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
        }
    //     else{
    //         return false;
    //     }
        
    // }
}

// gender
// blood_group
// email
// DOB
// birth_place
// religion
// nationality
// state
// city
// address
// father_name
// mother_name
// parent_state
// parent_city
// parent_address
// parent_email
// parent_contact
// guardian_name
// guardian_state
// guardian_city
// guardian_address
// guardian_email
// guardian_contact
// previous_school_name
// previous_school_state
// previous_school_city
// previous_school_address
// last_class
// last_class_year
// applied_class