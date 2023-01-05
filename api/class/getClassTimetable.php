<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../confid/database.php';
include_once '../../model/Timetable.php';

$database = new Database();
$db = $database->getConnection();
$items = new Timetable($db);
$data = json_decode(file_get_contents("php://input"),true);

$items->class_id = $data['class_id'];
$items->sec_id = $data['sec_id'];

$stmt = $items->getClassTimetable();
$itemCount = $stmt->rowCount();

// echo json_encode($itemCount);
if($itemCount > 0){
    $timetableArr = array();
    $timetableArr["body"] = array();
    $timetableArr["itemCount"] = $itemCount;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $e = array(
            "id" => $id,
            "period_id" => $period_id,
            "fac_id" => $fac_id,
            "day_id" => $day_id,
            "sub_id" => $sub_id
        );
        array_push($timetableArr["body"], $e);
    }
    echo json_encode($timetableArr);
    // echo "timetableArr";
}
else{
    // http_response_code(404);
    echo json_encode(array("message" => "No record found."));
}
?>