<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../../config/database/Database.php';
include_once '../../../model/Payment.php';

$database = new Database();
$connection = $database->getConnction();
$data = json_decode(file_get_contents('php://input'));

$payment = new Payment($connection);
$payment->idpayment = $data->id;

$rst = $payment->read_single();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idpayment = $row['idpayment'];
        $order_idorder = $row['order_idorder'];
        $desc = $row['desc'];
        $amount = $row['amount'];
        $image = $row['image'];
        $date = $row['date'];
        $status = $row['status'];

        $element = array(
            'id' => $idpayment,
            'order_idorder' => $order_idorder,
            'desc' => $desc,
            'amount' => $amount,
            'image' => $image,
            'date' => $date,
            'status' => $status
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
