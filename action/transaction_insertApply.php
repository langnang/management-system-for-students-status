<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$id=$_POST["id"];
$type=$_POST["type"];
$reason=$_POST["reason"];

echo insertTransactionApply($id,$type,$reason);
//echo $id.$type.$reason;