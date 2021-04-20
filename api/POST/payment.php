<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/Payment.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$payment = new Payment($connection);

$payment->order_idorder = $data->order_idorder;
$payment->desc = $data->desc;
$payment->amount = $data->amount;
$payment->image = $data->image;
$payment->date = $data->date;
$payment->status = $data->status;

if ($payment->create())  {
    echo json_encode(['message' => 'Blog deleted!']);
} else {
    echo json_encode(['message' => 'Blog delete failed!']);
}
