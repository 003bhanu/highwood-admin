<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../../config/database/Database.php';
include_once '../../../model/Category.php';

$database = new Database();
$connection = $database->getConnction();

$category = new Category($connection);
$category->idcategory = isset($_GET['id']);
$rst = $category->read();
$count = $rst->rowCount();

if ($count > 0)  {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $element = array(
            'id' => isset($idcategory),
            'name' => isset($name),
            'status' => isset($status)
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
