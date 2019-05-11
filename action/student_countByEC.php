<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$entrance =$_POST["entrance"];
$college=$_POST["college"];

class collegeCount{
    public $entrance;
    public $college;
    public $stuCount;
    public $stuCount_un;
}
//echo $entrance.$college;
$json = '';
$data=array();

$col = new collegeCount();
$col->entrance = $entrance;
$col->college=$college;
$col->stuCount = selectStudentCountByEC($entrance,$college);
$col->stuCount_un = selectStudentCountByUnEC($entrance,$college);
$data[]=$col;

$json = json_encode($data);//把数据转换为JSON数据.
echo $json;






