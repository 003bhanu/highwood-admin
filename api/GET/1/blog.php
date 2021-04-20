<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../../config/database/Database.php';
include_once '../../../model/Blog.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));

$blog = new Blog($connection);
$blog->idblog = $data->id;

$rst = $blog->read_single();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idblog = $row['idblog'];
        $title = $row['title'];
        $data_sum = $row['data_sum'];
        $data = $row['data'];

        $element = array(
            'id' => $idblog,
            'title' => $title,
            'data_sum' => $data_sum,
            'data' => $data
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
