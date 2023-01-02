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
$msg;
$data = json_decode(file_get_contents("php://input"),true);

    $items->id = $data['id'];
    $items->first_name = $data['first_name'];
    $items->last_name = $data['last_name'];
    $items->gender = $data['gender'];
    $items->blood_group = $data['blood_group'];
    $items->email = $data['email'];
    $items->DOB = $data['DOB'];
    $items->birth_place = $data['birth_place'];
    $items->religion = $data['religion'];
    $items->nationality = $data['nationality'];
    $items->state = $data['state'];
    $items->city = $data['city'];
    $items->address = $data['address'];
    $items->father_name = $data['father_name'];
    $items->mother_name = $data['mother_name'];
    $items->parent_state = $data['parent_state'];
    $items->parent_city = $data['parent_city'];
    $items->parent_address = $data['parent_address'];
    $items->parent_email = $data['parent_email'];
    $items->parent_contact = $data['parent_contact'];
    $items->guardian_name = $data['guardian_name'];
    $items->guardian_state = $data['guardian_state'];
    $items->guardian_city = $data['guardian_city'];
    $items->guardian_address = $data['guardian_address'];
    $items->guardian_email = $data['guardian_email'];
    $items->guardian_contact = $data['guardian_contact'];
    $items->previous_school_name = $data['previous_school_name'];
    $items->previous_school_state = $data['previous_school_state'];
    $items->previous_school_city = $data['previous_school_city'];
    $items->previous_school_address = $data['previous_school_address'];
    $items->last_class = $data['last_class'];
    $items->last_class_year = $data['last_class_year'];
    $items->applied_class = $data['applied_class'];
    $items->sec_id = $data['sec_id'];

    if($items->updateStudent()){
        $msg['msg']="Student updated successfully.";
        $msg['status']="202";
        // echo 'Student updated successfully.';
    } else{
        $msg['msg']="Student could not be updated.";
        $msg['status']="404";
        // echo 'Student could not be updated.';
    }
    echo json_encode($msg);
    
?>