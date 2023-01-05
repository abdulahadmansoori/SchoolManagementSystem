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
    // $items->last_name = $data['last_name'];

    if($items->deleteStudent($data['id'])){
        $msg['msg']="Student deleted successfully.";
        $msg['status']="202";
        // echo 'Student deleted successfully.';
    } else{
        $msg['msg']="Student could not be deleted.";
        $msg['status']="404";
        // echo 'Student could not be deleted.';
    }
    echo json_encode($msg);
    
?>