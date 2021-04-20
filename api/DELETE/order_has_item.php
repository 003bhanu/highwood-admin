<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/OrderHasItem.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$order_has_item = new OrderHasItem($connection);
$order_has_item->idmaterial = $data->id;

if ($order_has_item->delete())  {
    echo json_encode(['message' => 'Order has item data deleted!']);
} else {
    echo json_encode(['message' => 'Order has item  delete failed!']);
}
