<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$id = $_POST["id"];
$password = $_POST["password"];

session_start();
$_SESSION["ID"] = $id;
$result= selectSetUpByName("学期注册");

while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$_SESSION["mark"]= '"'.$row["mark"].'"';
//echo "<script>console.log(".$_SESSION["mark"].");</script>";
}
echo userSignIn($id, $password);
