<?php
/**
 * Created by PhpStorm.
 * User: magic
 * Date: 2/26/18
 * Time: 7:39 PM
 */
ini_set('display_errors', 1);
require 'Database.php';

function escapeData($data)
{
    return addslashes(strip_tags(trim($data)));
}

$num1 = uniqid();
$num2 = rand(100, 999);
$num3 = time();

$orderID = $num1 . $num2 . $num3;


$quantity = escapeData($_POST['quantity']);
$color = escapeData($_POST['color']);
$date = strtotime($_POST['date']);
$type = escapeData($_POST['type']);

$db = new DB();
$sql = "INSERT INTO `widget_order` VALUES ('$orderID', '$quantity', '$color', '$date', '$type', time())";
$res = $db->exec($sql);

if ($res) {
    return 'Your order has been placed, Order ID is'.$orderID;
} else {
    print 'Please try again';
}

