<?php
/**
 * Created by PhpStorm.
 * User: magic
 * Date: 2/26/18
 * Time: 7:39 PM
 */

//require 'Database.php';
//
//function escapeData()
//{
//    return addslashes(strip_tags(trim($data)));
//}
//
//function checkData()
//{
//    $quantity = escapeData($_POST('quantity'));
//    $color = escapeData($_POST('color'));
//    $date = escapeData($_POST('date'));
//    $type = escapeData($_POST('type'));
//}

$date = htmlspecialchars($_POST('date'));

echo $date;