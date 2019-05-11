<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "../sql/sqlHelper.php";

include "../model/electiveClass.php";

$id=$_POST["id"];
$mark=$_POST["mark"];

$result= selectElectiveByIM($id, $mark);

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$ele = new electiveClass();
$ele->id = $row["id"];
$ele->course=$row["course"];
$ele->hours = $row["hours"];
$ele->credits = $row["credits"];
$data[]=$ele;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;