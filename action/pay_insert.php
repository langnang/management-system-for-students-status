<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';


$id=$_POST["学号"];
$pay=$_POST["缴费情况"];

echo insertPay($id,$pay);