<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../config/database/Database.php';
include_once '../../model/OrderHasItem.php';

$database = new Database();
$connection = $database->getConnction();

$order_has_item = new OrderHasItem($connection);
$rst = $order_has_item->read();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idorder_has_item = $row['idorder_has_item'];
        $order_idorder = $row['order_idorder'];
        $item_iditem = $row['item_iditem'];
        $amount = $row['amount'];
        $qty = $row['qty'];
        $total = $row['total'];
        $status = $row['status'];

        $element = array(
            'id' => $idorder_has_item,
            'name' => $order_idorder,
            'item_iditem' => $item_iditem,
            'amount' => $amount,
            'qty' => $qty,
            'total' => $qty,
            'status' => $status
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
