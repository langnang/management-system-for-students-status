<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';


$id_student=$_POST["学号"];
$mark=$_POST["学期标志"];
$id_course=$_POST["课程号"];
$course=$_POST["课程名"];
$hours=$_POST["学时"];
$credits=$_POST["学分"];
$score=$_POST["成绩"];

echo insertScore($id_student,$mark,$id_course,$course,$hours,$credits,$score);