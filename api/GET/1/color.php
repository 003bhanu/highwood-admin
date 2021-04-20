<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../../config/database/Database.php';
include_once '../../../model/Color.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));

$color = new Color($connection);
$color->idcolor = $data->id;

$rst = $color->read_single();
$count = $rst->rowCount();
