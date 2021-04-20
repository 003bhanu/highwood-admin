<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/Client.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$client = new Client($connection);
$client->idblog = $data->id;

if ($client->delete())  {
    echo json_encode(['message' => 'Client deleted!']);
} else {
    echo json_encode(['message' => 'Client delete failed!']);
}
