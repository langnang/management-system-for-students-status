<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$id=$_POST["id"];
$college=$_POST["college"];

$id_old=$_POST["id_old"];
$college_old=$_POST["college_old"];

echo updateCollege($id, $college, $id_old, $college_old);