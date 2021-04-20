<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/OrderHasItem.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$order_has_item = new OrderHasItem($connection);

$order_has_item->idorder_has_item = $data->id;
$order_has_item->order_idorder = $data->order_idorder;
$order_has_item->item_iditem = $data->item_iditem;
$order_has_item->amount = $data->amount;
$order_has_item->qty = $data->qty;
$order_has_item->total_amount = $data->total_amount;
$order_has_item->status = $data->status;

if ($order_has_item->update())  {
    echo json_encode(['message' => 'Blog deleted!']);
} else {
    echo json_encode(['message' => 'Blog delete failed!']);
}
