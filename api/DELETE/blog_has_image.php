<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/BlogHasImage.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$blog_has_image = new BlogHasImage($connection);
$blog_has_image->idblog = $data->id;

if ($blog_has_image->delete())  {
    echo json_encode(['message' => 'Blog has image data deleted']);
} else {
    echo json_encode(['message' => 'Blog has image data delete failed']);
}
