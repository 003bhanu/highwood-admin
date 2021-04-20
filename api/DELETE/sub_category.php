<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/SubCategory.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$sub_category = new SubCategory($connection);
$sub_category->idblog = $data->id;

if ($sub_category->delete())  {
    echo json_encode(['message' => 'Sub category deleted!']);
} else {
    echo json_encode(['message' => 'Sub category delete failed!']);
}
