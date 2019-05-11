<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$id_student = $_POST["id_student"];
$mark = $_POST["mark"];
$id_course = $_POST["id_course"];

echo insertSchedule($id_student, $mark, $id_course);