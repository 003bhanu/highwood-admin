<?php
header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

include_once '../../config/database/Database.php';
include_once '../../model/Client.php';

$database = new Database();
$connection = $database->getConnction();

$client = new Client($connection);
$rst = $client->read();
$count = $rst->rowCount();

if ($count > 0) {
    $arr_category = array();
    $arr_category['data'] = array();

    while ($row = $rst->fetch(PDO::FETCH_ASSOC)) {
        $idclient = $row['idclient'];
        $name = $row['name'];
        $org = $row['org'];
        $contact_1 = $row['contact_1'];
        $contact_2 = $row['contact_2'];
        $email = $row['email'];
        $address = $row['address'];
        $username = $row['username'];
        $password = $row['password'];
        $tracker = $row['tracker'];
        $status = $row['status'];

        $element = array(
            'id' => $idclient,
            'name' => $name,
            'org' => $org,
            'contact_1' => $contact_1,
            'contact_2' => $contact_2,
            'email' => $email,
            'address' => $address,
            'username' => $username,
            'password' => $password,
            'tracker' => $tracker,
            'status' => $status,
        );
        array_push($arr_category['data'], $element);
    }
    echo json_encode($arr_category);
} else {
    echo json_encode(['message' => 'No categories found']);
}
