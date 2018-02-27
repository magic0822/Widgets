<?php
/**
 * Created by PhpStorm.
 * User: magic
 * Date: 2/26/18
 * Time: 7:40 PM
 */

class DB extends SQLite3
{
    function __construct()
    {
        $this->open('widgets.db');
    }
}

$db = new DB();
$create_tale =<<<EOF
CREATE TABLE IF NOT EXISTS `widget_order`(
      order_id INT unsigned PRIMARY KEY NOT NULL,
      quantity INT unsigned NOT NULL,
      color VARCHAR(10) NOT NULL,
      date_needed INT unsigned NOT NULL,
      create_date INT unsigned NOT NULL
    )
EOF;
$res = $db->exec($create_tale);
if (!$res) {
    echo $db->lastErrorMsg();
}
