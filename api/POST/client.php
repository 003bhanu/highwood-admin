<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/Client.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$client = new Client($connection);

$client->name = $data->name;
$client->org = $data->org;
$client->contact_1 = $data->contact_1;
$client->contact_2 = $data->contact_2;
$client->email = $data->email;
$client->address = $data->address;
$client->username = $data->username;
$client->password = $data->password;
$client->tracker = $data->tracker;
$client->status = $data->status;


if ($client->create())  {
    echo json_encode(['message' => 'Blog deleted!']);
} else {
    echo json_encode(['message' => 'Blog delete failed!']);
}
