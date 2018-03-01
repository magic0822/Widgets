<?php
/**
 * Created by PhpStorm.
 * User: magic
 * Date: 2/26/18
 * Time: 7:39 PM
 */
ini_set('display_errors', 1);
require './DB/Model.class.php';

try {
    //filter user inputs
    function escapeData($data)
    {
        return htmlentities((strip_tags(trim($data))), ENT_QUOTES, 'UTF-8');
    }

//Params for SQL
    $orderID = uniqid() . rand(100, 999) . time();
    $quantity = escapeData($_POST['quantity']);
    $color = escapeData($_POST['color']);
    $date = strtotime(escapeData($_POST['date']));
    $type = escapeData($_POST['type']);
    $create = time();
    $errorMSG = '';
//validation for null inputs
    if (empty($quantity) || empty($date)) {
        throw new Exception("<h3>Some contents are missing!</h3>");
    }
//validation for date of needed
    if (($date - time()) < 604800) {
        throw new Exception("<h3>The date format is either incorrect or not valid, please try again.</h3>");
    }
//validation for quantity format
    if (filter_var($quantity, FILTER_VALIDATE_INT) == false) {
        throw new Exception("<h3>Quantity must be an integer.</h3>");
    }
//validation for color
    if ($color != 'red' && $color != 'blue' && $color != 'yellow') {
        throw new Exception("<h3>The color is not supported.</h3>");
    }

//save data to database
    $db = new Model();
    $res = $db->createData($orderID, $quantity, $color, $type, $date, $create);
    if ($res) {
        $msg = 'Your order has been placed, Order ID is <strong>' . $orderID . '</strong>.';
        print $msg;
    } else {
        throw new Exception('Something went wrong, please try again later!');
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
} catch (Exception $e) {
    header('HTTP/1.1 401 Unauthorized');
    echo $e->getMessage();
}

