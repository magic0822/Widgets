<?php
/**
 * Created by PhpStorm.
 * User: magic
 * Date: 2/27/18
 * Time: 10:10 PM
 * Model class handle the database updates
 */
ini_set('display_errors', 1);

class Model extends SQLite3
{
//    auto open database
    public function __construct()
    {
        $this->open('widgets.db');
    }

//    insert new line to database
    public function createData($orderID, $quantity, $color, $type, $date, $create)
    {
        $sql = "INSERT INTO `widget_order` VALUES ('$orderID','$quantity','$color','$type','$date','$create')";
        return $this->exec($sql);
    }

//    read all existing data
    public function readData()
    {
        $sql = "select * from widget_order";
        return $this->query($sql);
    }
}

