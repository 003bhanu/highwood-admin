<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type,
Authorization, X-Requested-With');

include_once '../../config/database/Database.php';
include_once '../../model/Item.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));
$item = new Item($connection);

$item->iditem = $data->id;
$item->sub_category_idsub_category = $data->sub_category_idsub_category;
$item->size_idsize = $data->size_idsize;
$item->material_idmaterial = $data->material_idmaterial;
$item->color_idcolor = $data->color_idcolor;
$item->image_idimage = $data->image_idimage;
$item->name = $data->name;
$item->price = $data->price;
$item->qty = $data->qty;
$item->status = $data->status;

if ($item->update())  {
    echo json_encode(['message' => 'Blog deleted!']);
} else {
    echo json_encode(['message' => 'Blog delete failed!']);
}
