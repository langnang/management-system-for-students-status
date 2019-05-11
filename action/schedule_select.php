<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';
include '../model/scheduleClass.php';

$id=$_POST["id"];
$mark=$_POST["mark"];

$result=selectSchedule($id, $mark);

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$sch = new scheduleClass();
$sch->id_student= $row["id_student"];
$sch->mark = $row["mark"];
$sch->id_course = $row["id_course"];
$data[]=$sch;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;