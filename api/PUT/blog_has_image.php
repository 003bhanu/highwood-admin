<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/BlogHasImage.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$blog_has_iamge = new BlogHasImage($connection);

$blog_has_iamge->idblog_has_image = $data->id;
$blog_has_iamge->image_idimage = $data->image_idimage;
$blog_has_iamge->blog_idblog = $data->blog_idblog;
$blog_has_iamge->type = $data->type;

if ($blog_has_iamge->update())  {
    echo json_encode(['message' => 'Blog deleted!']);
} else {
    echo json_encode(['message' => 'Blog delete failed!']);
}
