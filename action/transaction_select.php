<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include"../sql/sqlHelper.php";
include"../model/transactionClass.php";


$result= selectTransaction();

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$tra = new transactionClass();
$tra->id= $row["id"];
$tra->id_student = $row["id_student"];
$tra->type = $row["type"];
$tra->reason = $row["reason"];
$tra->result=$row["result"];
$data[]=$tra;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;