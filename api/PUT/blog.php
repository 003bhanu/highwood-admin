<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/Blog.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$blog = new Blog($connection);

$blog->idblog = $data->id;
$blog->data_sum = $data->data_sum;
$blog->data = $data->data;
$blog->status = $data->status;

if ($blog->update())  {
    echo json_encode(['message' => 'Blog deleted!']);
} else {
    echo json_encode(['message' => 'Blog delete failed!']);
}
