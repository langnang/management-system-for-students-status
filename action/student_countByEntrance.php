<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../sql/sqlHelper.php';

$entrance =$_POST["entrance"];

class entranceCount{
    public $entrance;
    public $stuCount;
    public $stuCount_un;
}

selectStudentCountByEntrance($entrance);
selectStudentCountByUnEntrance($entrance);
$json = '';
//$data= '[{time:'.$entrance.',unentrance:'.selectStudentCountByUnEntrance($entrance).',entrance:'.selectStudentCountByEntrance($entrance).'}]';
$data=array();
//while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
//{
$ent = new entranceCount();
$ent->entrance = $entrance;
$ent->stuCount = selectStudentCountByEntrance($entrance);
$ent->stuCount_un = selectStudentCountByUnEntrance($entrance);
$data[]=$ent;
//}
$json = json_encode($data);//把数据转换为JSON数据.
echo $json;






