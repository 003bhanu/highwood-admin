<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../config/database/Database.php';
include_once '../../model/Size.php';

$database = new Database();
$connection = $database->getConnction();

$size = new Size($connection);
$rst = $size->read();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idsize = $row['idsize'];
        $desc = $row['desc'];
        $status = $row['status'];

        $element = array(
            'id' => $idsize,
            'desc' => $desc,
            'status' => $status
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
