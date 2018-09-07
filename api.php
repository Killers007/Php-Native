<?php
/**  
 * Contoh API Sederhana
 * irul @ 20171102
 */

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    echo "$method: " . $data->nama;
    break;
    case 'POST':
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    echo "$method: " . $data;
    break;
    case 'PUT':
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    echo "$method: " . $data->nama;
    case 'DELETE':
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    echo "$method: " . $data->nama;
    break;
    default:
    echo "Method not defined!";

    echo "my change";
    echo "tambah lagi";
}
?>