<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$major=$_POST["major"];
$id_student=$_POST["id_student"];
$id_course=$_POST["id_course"];
//echo $major;

class programViewClass{
    public $major;
    public $program;
}
$result= selectProgramViewByMajor($major);
$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$prv = new programViewClass();
$prv->major = $row["major"];
$prv->id_student=$id_student;

$arr_course=explode(',',$id_course);
$arr_program=explode(',',$row["GROUP_CONCAT(program)"]);


$prv->program = count(array_diff ($arr_program,$arr_course));

//$prv->program =implode(",", array_diff_assoc ($arr_program,$arr_course));
$data[]=$prv;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;