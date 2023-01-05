<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../confid/database.php';
include_once '../../model/Attendence.php';

$database = new Database();
$db = $database->getConnection();
$items = new Attendence($db);
$data = json_decode(file_get_contents("php://input"),true);

    $items->fac_id = $data['fac_id'];
    
$stmt = $items->getEmployeeAttendance();
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
            "fac_id" => $fac_id,
            "date" => $date,
            "status" => $status
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