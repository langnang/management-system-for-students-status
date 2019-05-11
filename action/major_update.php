<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$id=$_POST["id"];
$major=$_POST["major"];

$id_old=$_POST["id_old"];
$major_old=$_POST["major_old"];

$college=$_POST["college"];

echo updateMajor($id, $major, $id_old, $major_old,$college);