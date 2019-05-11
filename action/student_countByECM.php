<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$entrance =$_POST["entrance"];
$college=$_POST["college"];
$major=$_POST["major"];

class majorCount{
    public $entrance;
    public $college;
    public $major;
    public $stuCount;
    public $stuCount_un;
}
//echo $entrance.$college;
$json = '';
$data=array();

$maj = new majorCount();
$maj->entrance = $entrance;
$maj->college=$college;
$maj->major=$major;
$maj->stuCount = selectStudentCountByECM($entrance,$college,$major);
$maj->stuCount_un = selectStudentCountByUnECM($entrance,$college,$major);
$data[]=$maj;

$json = json_encode($data);//把数据转换为JSON数据.
echo $json;






