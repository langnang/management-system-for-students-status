<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//链接数据库
$con= mysql_connect('localhost', 'root', '');
if(!$con){
    die('连接loacl失败！'.mysql_errno());
}
else{
//    echo'连接loacl成功！';
}
mysql_query("set names 'utf8'");
$db_con=mysql_select_db('sms',$con);
if($db_con){
//    echo'连接数据库成功'.'<br>';
}else{
    echo'连接数据库失败'.mysql_errno();
}