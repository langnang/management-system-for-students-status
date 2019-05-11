<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

include '../model/courseClass.php';

$id=$_POST["id"];

$result=selectCourseByID($id);


$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$cou = new courseClass();
$cou->id = $row["id"];
$cou->course = $row["course"];
$cou->hours = $row["hours"];
$cou->credits=$row["credits"];
$data[]=$cou;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;