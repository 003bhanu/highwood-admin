<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/Order.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$order = new Order($connection);

$order->client_idclient = $data->client_idclient;
$order->date = $data->date;
$order->total_qty = $data->total_qty;
$order->total_amount = $data->total_amount;
$order->delivary_status = $data->delivary_status;
$order->address = $data->address;
$order->contact = $data->contact;
$order->status = $data->status;

if ($order->create())  {
    echo json_encode(['message' => 'Blog deleted!']);
} else {
    echo json_encode(['message' => 'Blog delete failed!']);
}
