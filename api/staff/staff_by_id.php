<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../confid/database.php';
include_once '../../model/Staff.php';

$database = new Database();
$db = $database->getConnection();
$items = new Staff($db);
// $data = json_decode(file_get_contents("php://input"),true);
$items->id = $_GET['id'];
$stmt = $items->getStaffById();

$itemCount = $stmt->rowCount();

// echo json_encode($itemCount);
if($itemCount > 0){
    $staffArr = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $staffArr = array(
            "id" => $id,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "gender" => $gender,
            "blood_group" => $blood_group,
            "email" => $email,
            "date_of_birth" => $date_of_birth,
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
            "education01" => $education01,
            "education01_year" => $education01_year,
            "education01_subject" => $education01_subject,
            "education02" => $education02,
            "education02_year" => $education02_year,
            "education02_subject" => $education02_subject,
            "education03" => $education03,
            "education03_year" => $education03_year,
            "education03_subject" => $education03_subject,
            "education04" => $education04,
            "education04_year" => $education04_year,
            "education04_subject" => $education04_subject,
            "created_on" => $created_on
        );
    }
    echo json_encode($staffArr);
}
else{
    http_response_code(404);
    echo json_encode(array("message" => "No record found."));
}
?>