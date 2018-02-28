<?php
/**
 * Created by PhpStorm.
 * User: magic
 * Date: 2/26/18
 * Time: 7:39 PM
 */
ini_set('display_errors', 1);
require './DB/Model.class.php';

//filter user inputs
function escapeData($data)
{
    return strip_tags(trim($data));
}

//Params for SQL
$orderID = uniqid() . rand(100, 999) . time();
$quantity = escapeData($_POST['quantity']);
$color = escapeData($_POST['color']);
$date = strtotime($_POST['date']);
$type = escapeData($_POST['type']);
$create = time();

//validation for null inputs
if (empty($quantity) || empty($date)) {
    print 'Some content is missing.';
    die();
}
//validation for date of needed
if(($date - time())<604800){
    print 'The date format is either incorrect or not valid, please try again.';
    die();
}

//save data to database
$db = new Model();
$res = $db->createData($orderID,$quantity,$color,$type,$date,$create);
if ($res) {
    print 'Your order has been placed, Order ID is '.$orderID.'.';
    print '\n';
} else {
    print 'Something went wrong, please try again later!';
}

//$res = $db->readData();
//while($row = $res->fetchArray(SQLITE3_ASSOC) ){
//    echo "orderID = ". $row['order_id'] . "\n";
//    echo "quantity = ". $row['quantity'] ."\n";
//    echo "color = ". $row['color'] ."\n";
//    echo "widget_type =  ".$row['widget_type'] ."\n\n";
//    echo "date_needed =  ".$row['date_needed'] ."\n\n";
//    echo "create_date =  ".($row['create_date'])."\n\n";
//}

