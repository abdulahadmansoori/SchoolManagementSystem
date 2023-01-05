<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../confid/database.php';
include_once '../../model/Faculty.php';

$database = new Database();
$db = $database->getConnection();
$items = new Faculty($db);
$msg;
$data = json_decode(file_get_contents("php://input"),true);

    $items->id = $data['id'];
    // $items->last_name = $data['last_name'];

    if($items->deleteFaculty()){
        $msg['msg']="Faculty deleted successfully.";
        $msg['ststus']="202";
        echo 'Faculty deleted successfully.';
    } else{
        $msg['msg']="Faculty could not be deleted.";
        $msg['ststus']="404";
        echo 'Faculty could not be deleted.';
    }
    echo json_encode($msg);
    
?>