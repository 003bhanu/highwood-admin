<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../../config/database/Database.php';
include_once '../../../model/BlogHasImage.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));

$blog_has_image = new BlogHasImage($connection);
$blog_has_image->idblog_has_image = $data->id;

$rst = $blog_has_image->read_single();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idblog_has_image = $row['idblog_has_image'];
        $blog_idblog = $row['idblog_idblog'];
        $blog_image_idblog_image = $row['blog_image_idblog_image'];
        $type = $row['type'];

        $element = array(
            'id' => $idblog_has_image,
            'blog_idblog' => $blog_idblog,
            'blog_image_idblog_image' => $blog_image_idblog_image,
            'type' => $type
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
