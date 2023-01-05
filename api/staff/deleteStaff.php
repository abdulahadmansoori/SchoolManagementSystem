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
    // $items->last_name = $data['last_name'];

    if($items->deleteStaff()){
        $msg['msg']="Staff deleted successfully.";
        $msg['status']="202";
        // echo 'Staff deleted successfully.';
    } else{
        $msg['msg']="Staff could not be deleted.";
        $msg['status']="404";
        // echo 'Staff could not be deleted.';
    }
    echo json_encode($msg);
    
?>