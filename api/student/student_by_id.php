<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../confid/database.php';
include_once '../../model/Students.php';

$database = new Database();
$db = $database->getConnection();
$items = new Students($db);
// $data = json_decode(file_get_contents("php://input"),true);
$items->id = $_GET['id'];
$stmt = $items->getStudentById();

$itemCount = $stmt->rowCount();

// echo json_encode($itemCount);
if($itemCount > 0){
    $studentArr = array();
    // $studentArr["body"] = array();
    // $studentArr["itemCount"] = $itemCount;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $studentArr = array(
            "id" => $id,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "created" => $created_on,
            "gender" => $gender,
            "blood_group" => $blood_group,
            "email" => $email,
            "DOB" => $DOB,
            "birth_place" => $birth_place,
            "religion" => $religion,
            "nationality" => $nationality,
            "state" => $state,
            "city" => $city,
            "address" => $address,
            "father_name" => $father_name,
            "mother_name" => $mother_name,
            "parent_state" => $parent_state,
            "parent_city" => $parent_city,
            "parent_address" => $parent_address,
            "parent_email" => $parent_email,
            "parent_contact" => $parent_contact,
            "guardian_name" => $guardian_name,
            "guardian_state" => $guardian_state,
            "guardian_city" => $guardian_city,
            "guardian_address" => $guardian_address,
            "guardian_email" => $guardian_email,
            "guardian_contact" => $guardian_contact,
            "previous_school_name" => $previous_school_name,
            "previous_school_state" => $previous_school_state,
            "previous_school_city" => $previous_school_city,
            "previous_school_address" => $previous_school_address,
            "last_class" => $last_class,
            "last_class_year" => $last_class_year,
            "applied_class" => $applied_class,
            "sec_id" => $sec_id
        );
        // array_push($studentArr["body"], $e);
    }
    echo json_encode($studentArr);
    // echo "studentArr";
}
else{
    http_response_code(404);
    echo json_encode(array("message" => "No record found."));
}
?>