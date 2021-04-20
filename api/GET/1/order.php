<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../../config/database/Database.php';
include_once '../../../model/Order.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));

$order = new Order($connection);
$order->idorder = $data->id;

$rst = $order->read_single();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idorder = $row['idorder'];
        $client_idclient = $row['client_idclient'];
        $date = $row['date'];
        $total_qty = $row['total_qty'];
        $total_amount = $row['total_amount'];
        $delivery_status = $row['delivery_status'];
        $address = $row['address'];
        $contact = $row['contact'];
        $status = $row['status'];

        $element = array(
            'id' => $idorder,
            'client_idclient' => $client_idclient,
            'date' => $client_idclient,
            'total_qty' => $client_idclient,
            'total_amount' => $client_idclient,
            'delivery_status' => $client_idclient,
            'address' => $client_idclient,
            'contact' => $client_idclient,
            'status' => $status
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
