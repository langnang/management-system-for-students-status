<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include '../sql/sqlHelper.php';
include '../model/studentClass.php';

$entrance=$_POST["entrance"];
$college=$_POST["college"];
$major=$_POST["major"];


$result= selectStudentByECM($entrance,$college,$major);

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$stu = new studentClass();
$stu->id = $row["id"];
$stu->name = $row["name"];
$stu->sex = $row["sex"];
$stu->age = $row["age"];
$stu->card = $row["card"];
$stu->house = $row["house"];
$stu->entrance = $row["entrance"];
$stu->college = $row["college"];
$stu->major = $row["major"];
$stu->contact = $row["contact"];
$data[]=$stu;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;