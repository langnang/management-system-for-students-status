<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';
include '../model/collegeClass.php';

$result = selectColleges();

//while ($array = mysql_fetch_assoc($result)) {
//    echo("<tr><td>" . $array["id"] . "</td><td>" . $array["college"] . "</td></tr>");
//}

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$col = new collegeClass();
$col->id = $row["id"];
$col->college = $row["college"];
$data[]=$col;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;

