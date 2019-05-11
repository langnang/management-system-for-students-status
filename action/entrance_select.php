<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$result = selectEntrance();

//while ($array = mysql_fetch_assoc($result)) {
//    echo("<tr><td>" . $array["id"] . "</td><td>" . $array["college"] . "</td></tr>");
//}

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$time = $row["time"];
$data[]=$time;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;

