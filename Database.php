<?php
/**
 * Created by PhpStorm.
 * User: magic
 * Date: 2/26/18
 * Time: 7:40 PM
 */

require 'Model.class.php';

$db = new Model();
$create_tale =<<<EOF
CREATE TABLE IF NOT EXISTS `widget_order`(
      order_id CHAR(26) PRIMARY KEY NOT NULL,
      quantity INT unsigned NOT NULL,
      color VARCHAR(10) NOT NULL,
      widget_type VARCHAR(20) NOT NULL,
      date_needed INT unsigned NOT NULL,
      create_date INT unsigned NOT NULL
    )
EOF;
$res = $db->exec($create_tale);
if (!$res) {
    echo $db->lastErrorMsg();
}
