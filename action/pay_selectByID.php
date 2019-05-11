<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "../sql/sqlHelper.php";

$id=$_POST["id"];

$result= selectPayByID($id);
//echo $id;
class payClass{
    public $id;
    public $pay;
}

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$pay = new payClass();
$pay->id = $row["id"];
$pay->pay=$row["pay"];
$data[]=$pay;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;