<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

include '../model/scoreClass.php';

$id_student=$_POST["id_student"];


$result= selectScoreByID($id_student);

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$sco = new scoreClass();
$sco->id_studnet = $row["id_student"];
$sco->mark = $row["mark"];
$sco->id_course = $row["id_course"];
$sco->course = $row["course"];
$sco->hours=$row["hours"];
$sco->credits=$row["credits"];
$sco->score = $row["score"];
$data[]=$sco;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;