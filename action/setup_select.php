<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';
include '../model/setUpClass.php';


$result= selectSetUp();

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$set = new setUpClass();
$set->id= $row["id"];
$set->name = $row["name"];
$set->state = $row["state"];
$set->startTime = $row["startTime"];
$set->endTime=$row["endTime"];
$data[]=$set;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;

