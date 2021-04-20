<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/Material.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$material = new Material($connection);

$material->desc = $data->desc;
$material->status = $data->status;

if ($material->create())  {
    echo json_encode(['message' => 'Blog deleted!']);
} else {
    echo json_encode(['message' => 'Blog delete failed!']);
}
