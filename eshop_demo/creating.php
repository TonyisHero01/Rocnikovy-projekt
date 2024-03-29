<?php
require_once "./constants.php";
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);
$name = $input["name"];
$number_in_stock = $input["number_in_stock"];
$add_time = $input["add_time"];
$price = $input["price"];
try {
    $id = $database->create($name, $number_in_stock, $add_time, $price);
} catch (WrongFormatException $wfe) {
    http_response_code(400);
}
echo json_encode(["id" => $id]);