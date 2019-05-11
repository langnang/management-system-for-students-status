<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$entrance=$_POST["entrance"];
//echo $entrance;

class graduationClass{
    public $id_student;
    public $major;
    public $entrance;
    public $id_course;
}
$result= selectGraduationByEntrance($entrance);
$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$gra = new graduationClass();
$gra->id_student = $row["id"];
$gra->major = $row["major"];
$gra->entrance = $row["entrance"];
$gra->id_course = $row["GROUP_CONCAT(DISTINCT(score.id_course))"];
$data[]=$gra;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;