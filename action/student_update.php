<?php

/* 
 * To change this license header;$ choose License Headers in Project Properties.
 * To change this template file;$ choose Tools | Templates
 * and open the template in the editor.
 */
include '../sql/sqlHelper.php';


$id=$_POST["id"];
$name=$_POST["name"];
$sex=$_POST["sex"];
$age=$_POST["age"];
$card=$_POST["card"];
$house=$_POST["house"];
$entrance=$_POST["entrance"];
$college=$_POST["college"];
$major=$_POST["major"];
$contact=$_POST["contact"];
$id_old=$_POST["id_old"];
$name_old=$_POST["name_old"];
$sex_old=$_POST["sex_old"];
$age_old=$_POST["age_old"];
$card_old=$_POST["card_old"];
$house_old=$_POST["house_old"];
$entrance_old=$_POST["entrance_old"];
$college_old=$_POST["college_old"];
$major_old=$_POST["major_old"];
$contact_old=$_POST["contact_old"];

echo updateStudent($id,$name,$sex,$age,$card,$house,$entrance,$college,$major,$contact,$id_old,$name_old,$sex_old,$age_old,$card_old,$house_old,$entrance_old,$college_old,$major_old,$contact_old);