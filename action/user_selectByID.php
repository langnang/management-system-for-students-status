<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "../sql/sqlHelper.php";

$id=$_POST["id"];
//echo $id;

Class userClass{
    public $id;
    public $password;
    
};

$result= selectUserByID($id);

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$user = new userClass();
$user->id= $row["id"];
$user->password = $row["password"];
$data[]=$user;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;