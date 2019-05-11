<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';
include '../model/programClass.php';

$major=$_POST["major"];

$result= selectPrograms($major);

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$pro = new programClass();
$pro->major = $row["major"];
$pro->type = $row["type"];
$pro->program = $row["program"];
$data[]=$pro;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;