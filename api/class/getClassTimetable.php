<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../confid/database.php';
include_once '../../model/Classes.php';

$database = new Database();
$db = $database->getConnection();
$items = new Classes($db);
$data = json_decode(file_get_contents("php://input"),true);

$items->class_id = $data['class_id'];
$items->sec_id = $data['sec_id'];

$stmt = $items->getClassTimetable();
$itemCount = $stmt->rowCount();

// echo json_encode($itemCount);
if($itemCount > 0){
    $studentArr = array();
    $studentArr["body"] = array();
    $studentArr["itemCount"] = $itemCount;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $e = array(
            "id" => $id,
            "period_id" => $period_id,
            "fac_id" => $fac_id,
            "day_id" => $day_id,
            "sub_id" => $sub_id
        );
        array_push($studentArr["body"], $e);
    }
    echo json_encode($studentArr);
    // echo "studentArr";

}
else{
    // http_response_code(404);
    echo json_encode(array("message" => "No record found."));
}
?>