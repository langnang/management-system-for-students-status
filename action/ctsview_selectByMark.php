<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';
$mark=$_POST["mark"];
$result= selectCountTermScoreViewByMark($mark);

class CountTermScoreClass {

    //put your code here
    public $id_student;
    public $mark;
    public $credits;
    public $acquired;
}

$json = '';
$data = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
$cts = new CountTermScoreClass();
$cts->id_student = $row["id_student"];
$cts->mark = $row["mark"];
$cts->credits = $row["SUM(credits)"];
$cts->acquired = $row["SUM(acquired)"];
$data[]=$cts;
}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;