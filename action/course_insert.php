<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "../sql/sqlHelper.php";


$id=$_POST["课程号"];
$course=$_POST["课程名"];
$hours=$_POST["学时"];
$credits=$_POST["学分"];

echo insertCourse($id, $course, $hours, $credits);