<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$id=$_POST["id"];
$mark=$_POST["mark"];
$reason=$_POST["reason"];

echo updateRegisterApply($reason,$id,$mark);