<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../../config/database/Database.php';
include_once '../../../model/ItemImage.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));

$item_image = new ItemImage($connection);
$item_image->iditem_image = $data->id;

$rst = $item_image->read_single();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idcategory = $row['idcategory'];
        $name = $row['name'];
        $status = $row['status'];

        $element = array(
            'id' => $idcategory,
            'name' => $name,
            'status' => $status
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
