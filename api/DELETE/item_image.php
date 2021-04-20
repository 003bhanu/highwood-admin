<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/ItemImage.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$item_image = new ItemImage($connection);
$item_image->iditem_image = $data->id;

if ($item_image->delete())  {
    echo json_encode(['message' => 'Category deleted!']);
} else {
    echo json_encode(['message' => 'Category delete failed!']);
}
