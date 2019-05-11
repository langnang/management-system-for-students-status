<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';
include '../model/majorClass.php';

$college=$_POST["college"];

$result=selectMajors($college);

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$maj = new majorClass();
$maj->id = $row["id"];
$maj->major = $row["major"];

$data[]=$maj;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;