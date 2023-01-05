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
$stmt = $items->getStudents();
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
            "first_name" => $first_name,
            "last_name" => $last_name,
            "father_name" => $father_name,
            "applied_class" => $applied_class,
            "sec_id" => $sec_id,
            "created" => $created_on
        );
        array_push($studentArr["body"], $e);
    }
    echo json_encode($studentArr);
    // echo "studentArr";

}
else{
    http_response_code(404);
    echo json_encode(array("message" => "No record found."));
}
?>