<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'sqlcon.php';

//用户登录
function userSignIn($id,$password){
    $sql = sprintf("select count(*) from user where id = '%s' and password = '%s'",$id,$password);
//    echo $sql;
    $result = mysql_query($sql);
    $array= mysql_fetch_row($result);
    return $array[0];
}
function userUpdate($password,$id,$password_old){
    $sql = sprintf("update user set password= '%s' where id = '%s' and password = '%s'",$password,$id,$password_old);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'用户数据修改失败'.mysql_errno();
    }
}


//学生信息操作
function selectStudentById($id){
    $sql = sprintf("select * from student where id = '%s' ",$id);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'学生数据查询失败'.mysql_errno();
    }
}


//功能设置查询
function selectSetUpByName($name){
    $sql = sprintf("select * from setup where name = '%s'",$name);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'功能数据查询失败'.mysql_errno();
    }
}

//学期注册操作
function selectRegisterByIM($id,$mark){
    $sql = sprintf("select state from register where id = '%s' and mark='%s'",$id,$mark);
    $result = mysql_query($sql);
    $array= mysql_fetch_row($result);
    return $array[0];
}
function updateRegister($id,$mark){
    $sql = sprintf("update register set state='已注册' where id = '%s' and mark='%s'",$id,$mark);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'注册数据更新失败'.mysql_errno();
    }
}
function updateRegisterApply($reason,$id,$mark){
    $sql = sprintf("update register set state='未注册', reason= '%s' where id = '%s' and mark='%s'",$reason,$id,$mark);
    $result=  mysql_query($sql);
//    echo $sql;
    if($result){
        return $result;
    }else{
        echo'注册数据更新失败'.mysql_errno();
    }
}


//学期课程表
function selectSchedule($id,$mark){
    $sql = sprintf("select * from schedule where id_student='%s' and mark='%s' ",$id,$mark);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'课表数据查询失败'.mysql_errno();
    }
}
function insertSchedule($id_student,$mark,$id_course){
    $sql = sprintf("insert into schedule(id_student,mark,id_course)values('%s','%s','%s')",$id_student,$mark,$id_course);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        
        echo'选课数据添加失败'.$sql.mysql_errno();
    }
}
function deleteSchedule($id_student, $mark, $id_course){
    $sql = sprintf("delete from schedule where id_student='%s' and mark='%s' and id_course ='%s'",$id_student,$mark,$id_course);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'选课数据添加失败'.$sql.mysql_errno();
    }
}
//查询选课信息
function selectElective(){
    $sql = sprintf("select * from elective ");
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'选课数据查询失败'.mysql_errno();
    }
}
function selectElectiveByIM($id,$mark){
    $sql = sprintf("select * from elective where id='%s' and mark = '%s'",$id,$mark);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'选课数据查询失败'.mysql_errno();
    }
}

//查询基础课程
function selectCourseByID($id){
    $sql = sprintf("select * from course  where id='%s'",$id);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'课程数据查询失败'.mysql_errno();
    }
}
//查询培养方案
function selectPrograms($major){
    $sql = sprintf("select * from program where major='%s'",$major);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'培养数据查询失败'.mysql_errno();
    }
}

//查询个人成绩
function selectScoreByID($id_student){
    $sql = sprintf("select * from score where id_student='%s'",$id_student);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'成绩数据查询失败'.mysql_errno();
    }
}


//学籍异动申请
function insertTransactionApply($id,$type,$reason){
    $sql = sprintf("insert into transaction(id_student,type,reason)values('%s','%s','%s')",$id,$type,$reason);
    $result=  mysql_query($sql);
    echo $sql;
    if($result){
        return $result;
    }else{
        
        echo'异动数据添加失败'.$sql.mysql_errno();
    }
}


//学生缴费信息
function selectPayByID($id){
    $sql = sprintf("select * from pay where id='%s'",$id);
    $result=  mysql_query($sql);
//    echo $sql;
    if($result){
        return $result;
    }else{
        
        echo'缴费信息查询失败'.$sql.mysql_errno();
    }
}