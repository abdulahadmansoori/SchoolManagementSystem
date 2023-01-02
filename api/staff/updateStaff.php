<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../confid/database.php';
include_once '../../model/Staff.php';

$database = new Database();
$db = $database->getConnection();
$items = new Staff($db);
$msg;
$data = json_decode(file_get_contents("php://input"),true);

    $items->id = $data['id'];
    $items->first_name = $data['first_name'];
    $items->last_name = $data['last_name'];
    $items->gender = $data['gender'];
    $items->blood_group = $data['blood_group'];
    $items->email = $data['email'];
    $items->date_of_birth = $data['date_of_birth'];
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
    $items->education01 = $data['education01'];
    $items->education01_year = $data['education01_year'];
    $items->education01_subject = $data['education01_subject'];
    $items->education02 = $data['education02'];
    $items->education02_year = $data['education02_year'];
    $items->education02_subject = $data['education02_subject'];
    $items->education03 = $data['education03'];
    $items->education03_year = $data['education03_year'];
    $items->education03_subject = $data['education03_subject'];
    $items->education04 = $data['education04'];
    $items->education04_year = $data['education04_year'];
    $items->education04_subject = $data['education04_subject'];

    if($items->updateStaff()){
        $msg['msg']="Staff updated successfully.";
        $msg['status']="202";
        // echo 'Staff updated successfully.';
    } else{
        $msg['msg']="Staff could not be updated.";
        $msg['status']="404";
        // echo 'Staff could not be updated.';
    }
    echo json_encode($msg);
?>