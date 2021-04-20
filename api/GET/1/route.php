<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../../config/database/Database.php';
include_once '../../../model/Route.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));

$route = new Route($connection);
$route->idroute = $data->id;

$rst = $route->read_single();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idroute = $row['idroute'];
        $desc = $row['desc'];
        $status = $row['status'];

        $element = array(
            'id' => $idroute,
            'desc' => $desc,
            'status' => $status
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
