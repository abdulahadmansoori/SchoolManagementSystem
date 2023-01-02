<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../confid/database.php';
include_once '../../model/Faculty.php';

$database = new Database();
$db = $database->getConnection();
$items = new Faculty($db);
$stmt = $items->getFaculties();
$itemCount = $stmt->rowCount();

// echo json_encode($itemCount);
if($itemCount > 0){
        
    $facultyArr = array();
    $facultyArr["body"] = array();
    $facultyArr["itemCount"] = $itemCount;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $e = array(
            "id" => $id,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "created" => $created_on
        );
        array_push($facultyArr["body"], $e);
    }
    echo json_encode($facultyArr);
}
else{
    http_response_code(404);
    echo json_encode(array("message" => "No record found."));
}
?>