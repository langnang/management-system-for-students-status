<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';


$id=$_POST["id"];
$major=$_POST['major'];
$college=$_POST["college"];


echo insertMajor($id,$major,$college);