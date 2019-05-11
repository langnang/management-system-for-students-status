<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$name=$_POST["name"];
$password=$_POST["password"];

echo adminSignIn($name, $password);