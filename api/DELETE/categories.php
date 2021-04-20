<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/Category.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$category = new Category($connection);
$category->idblog = $data->id;

if ($category->delete())  {
    echo json_encode(['message' => 'Category deleted!']);
} else {
    echo json_encode(['message' => 'Category delete failed!']);
}
