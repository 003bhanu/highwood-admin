<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/SubCategory.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$sub_category = new SubCategory($connection);

$sub_category->data_sum = $data->data_sum;
$sub_category->data = $data->data;
$sub_category->status = $data->status;

if ($sub_category->create())  {
    echo json_encode(['message' => 'Blog deleted!']);
} else {
    echo json_encode(['message' => 'Blog delete failed!']);
}
