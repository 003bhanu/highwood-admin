<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../../config/database/Database.php';
include_once '../../../model/SubCategory.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));

$sub_category = new SubCategory($connection);
$sub_category->idsub_category = $data->id;

$rst = $sub_category->read_single();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idsub_category = $row['idsub_category'];
        $category_idcategory = $row['category_idcategory'];
        $name = $row['name'];
        $status = $row['status'];

        $element = array(
            'id' => $idsub_category,
            'category_idcategory' => $category_idcategory,
            'name' => $name,
            'status' => $status
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
