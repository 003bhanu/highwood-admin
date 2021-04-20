<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../config/database/Database.php';
include_once '../../model/Color.php';

$database = new Database();
$connection = $database->getConnction();

$color = new Color($connection);
$rst = $color->read();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idcolor = $row['idcolor'];
        $name = $row['name'];
        $code = $row['code'];
        $status = $row['status'];

        $element = array(
            'id' => $idcolor,
            'name' => $name,
            'code' => $code,
            'status' => $status
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
