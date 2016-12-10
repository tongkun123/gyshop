<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/9 0009
 * Time: 16:26
 */

define('IN_ECS', true);
define('EC_CHARSET', 'utf-8');
define('ROOT_PATH', 'C:/ecshop/');
define('DATA_DIR', 'data');

$db_host = "localhost:3306";
$db_name = "ecshop";
$db_user = "root";
$db_pass = "";

require('../includes/cls_mysql.php');
$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);

test_getAll();

function test_getAll()
{
    global $db;

    $sql = "SELECT user_id, user_name, email FROM jindong_admin_user";
    $result = $db->getAll($sql);
    print_r($result);
}