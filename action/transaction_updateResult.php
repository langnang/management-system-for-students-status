<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include "../sql/sqlHelper.php";

$id=$_POST["id"];
$result=$_POST["result"];

echo updateTransactionResult($result,$id);