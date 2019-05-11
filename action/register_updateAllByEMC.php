<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include"../sql/sqlHelper.php";
include "../model/registerClass.php";

$entrance =$_POST["entrance"];
$college=$_POST["college"];
$major=$_POST["major"];
$result= updateRegisterAllByEMC($entrance, $college, $major);
$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$reg = new registerClass();
$reg->id = $row["id"];

$data[]=$reg;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;
