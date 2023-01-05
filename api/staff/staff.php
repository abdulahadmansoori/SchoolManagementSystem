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
$stmt = $items->getStaff();
$itemCount = $stmt->rowCount();

// echo json_encode($itemCount);
if($itemCount > 0){
        
    $staffArr = array();
    $staffArr["body"] = array();
    $staffArr["itemCount"] = $itemCount;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $e = array(
            "id" => $id,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "created_on" => $created_on
        );
        array_push($staffArr["body"], $e);
    }
    echo json_encode($staffArr);
}
else{
    http_response_code(404);
    echo json_encode(array("message" => "No record found."));
}
?>