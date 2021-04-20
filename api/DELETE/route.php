<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/Route.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$route = new Route($connection);
$route->idroute = $data->id;

if ($route->delete())  {
    echo json_encode(['message' => 'Color deleted!']);
} else {
    echo json_encode(['message' => 'Color delete failed!']);
}
