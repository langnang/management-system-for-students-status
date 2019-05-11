<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';


$id = $_POST["学号"];
$name = $_POST["姓名"];
$sex = $_POST["性别"];
$age = $_POST["年龄"];
$card = $_POST["身份证号"];
$house = $_POST["籍贯"];
$entrance = $_POST["入学时间"];
$college = $_POST["学院"];
$major = $_POST["专业"];
$contact = $_POST["联系方式"];

echo insertStudent($id,$name,$sex,$age,$card,$house,$entrance,$college,$major,$contact);
