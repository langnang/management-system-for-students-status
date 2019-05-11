<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$name=$_POST["name"];
$state=$_POST["state"];
$mark=$_POST["mark"];
$start=$_POST["startTime"];
$end=$_POST["endTime"];

echo updateSetUpByName($state,$mark,$start,$end,$name);

