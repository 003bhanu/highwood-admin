<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/BlogImage.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$blog_image = new BlogImage($connection);
$blog_image->idblog = $data->id;

if ($blog_image->delete())  {
    echo json_encode(['message' => 'Blog Image deleted']);
} else {
    echo json_encode(['message' => 'Blog Image delete failed']);
}
