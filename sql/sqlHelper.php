<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'sqlcon.php';

//管理员登录
function adminSignIn($name,$password){
    $sql = sprintf("select count(*) from admin where name = '%s' and password = '%s'",$name,$password);
//    echo $sql;
    $result = mysql_query($sql);
    $array= mysql_fetch_row($result);
    return $array[0];
}


//学院操作
function selectColleges(){
    $sql = sprintf("select * from college order by id");
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'学院数据查询失败'.mysql_errno();
    }
}
function insertCollege($id,$college){
    $sql = sprintf("insert into college(id,college)values('%s','%s')",$id,$college);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'学院数据添加失败'.mysql_errno();
    }
}
function updateCollege($id,$college,$id_old,$college_old){
    $sql = sprintf("update college set id='%s',college='%s' where id='%s' and college='%s'",$id,$college,$id_old,$college_old);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'学院数据更新失败'.mysql_errno();
    }
}
function deleteCollege($id,$college){
    $sql = sprintf("delete from college where id='%s' and college='%s'",$id,$college);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'学院数据删除失败'.mysql_errno();
    }
}


//专业操作
function selectMajors($college){
    $sql = sprintf("select * from major where college='%s'",$college);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'专业数据查询失败'.mysql_errno();
    }
}
function insertMajor($id,$major,$college){
    $sql = sprintf("insert into major(id,major,college)values('%s','%s','%s')",$id,$major,$college);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'专业数据添加失败'.mysql_errno();
    }
}
function updateMajor($id,$major,$id_old,$major_old,$college){
    $sql = sprintf("update major set id='%s',major='%s' where id='%s' and major='%s' and college='%s'",$id,$major,$id_old,$major_old,$college);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'专业数据更新失败'.mysql_errno();
    }
}
function deleteMajor($id,$major,$college){
    $sql = sprintf("delete from major where id='%s' and major='%s' and college='%s'",$id,$major,$college);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'专业数据删除失败'.mysql_errno();
    }
}


//基础课程操作
function getCourses(){
    $sql = sprintf("select * from course ");
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'课程数据查询失败'.mysql_errno();
    }
}
function insertCourse($id,$course,$hours,$credits){
    $sql = sprintf("insert into course(id,course,hours,credits)values('%s','%s','%s','%s')",$id,$course,$hours,$credits);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        
        echo'课程数据添加失败'.$sql.mysql_errno();
    }
}
function selectCourseByID($id){
    $sql = sprintf("select * from course  where id='%s'",$id);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'课程数据查询失败'.mysql_errno();
    }
}
function selectCourseLikeID($id){
    $sql = sprintf("select * from course  where id like '%s'",$id);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'课程数据查询失败'.mysql_errno();
    }
}
function selectCourseLikeName($course){
    $sql = sprintf("select * from course  where course like '%s'",$course);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'课程数据查询失败'.mysql_errno();
    }
}



function selectPrograms($major){
    $sql = sprintf("select * from program where major='%s'",$major);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'培养数据查询失败'.mysql_errno();
    }
}



//学生信息操作
function insertStudent($id,$name,$sex,$age,$card,$house,$entrance,$college,$major,$contact){
    $sql = sprintf("insert into student(id,name,sex,age,card,house,entrance,college,major,contact)values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$id,$name,$sex,$age,$card,$house,$entrance,$college,$major,$contact);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        
        echo'学生数据添加失败'.$sql.mysql_errno();
    }
}
function selectStudentByECM($entrance,$college,$major){
    $sql = sprintf("select * from student where entrance='%s' and college='%s' and major='%s'",$entrance,$college,$major);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo $sql;
        echo'学生数据查询失败'.mysql_errno();
    }
}
function updateStudent($id,$name,$sex,$age,$card,$house,$entrance,$college,$major,$contact,$id_old,$name_old,$sex_old,$age_old,$card_old,$house_old,$entrance_old,$college_old,$major_old,$contact_old){
    $sql= sprintf("update student set id='%s',name='%s',sex='%s',age='%s',card='%s',house='%s',entrance='%s',college='%s',major='%s',contact='%s'where id='%s'and name='%s'and sex='%s'and age='%s'and card='%s'and house='%s'and entrance='%s'and college='%s'and major='%s'and contact='%s'",$id,$name,$sex,$age,$card,$house,$entrance,$college,$major,$contact,$id_old,$name_old,$sex_old,$age_old,$card_old,$house_old,$entrance_old,$college_old,$major_old,$contact_old);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'学生数据更新失败'.mysql_errno();
    }
}
function deleteStudent($id,$name,$sex,$age,$card,$house,$entrance,$college,$major,$contact){
    $sql= sprintf("delete from student where id='%s'and name='%s'and sex='%s'and age='%s'and card='%s'and house='%s'and entrance='%s'and college='%s'and major='%s'and contact='%s'",$id,$name,$sex,$age,$card,$house,$entrance,$college,$major,$contact);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'学生数据删除失败'.mysql_errno();
    }
}
function selectStudentCountByEntrance($entrance){
    $sql = sprintf("select count(*) from student where entrance='%s' ",$entrance);
    $result=  mysql_query($sql);
    $array= mysql_fetch_row($result);
    return $array[0];
}
function selectStudentCountByUnEntrance($entrance){
    $sql = sprintf("select count(*) from student,register where student.entrance='%s' and register.id=student.id and register.state='未注册' ",$entrance);
    $result=  mysql_query($sql);
    $array= mysql_fetch_row($result);
    return $array[0];
}
function selectStudentCountByEC($entrance,$college){
    $sql = sprintf("select count(*) from student where entrance='%s' and college='%s'",$entrance,$college);
    $result=  mysql_query($sql);
    $array= mysql_fetch_row($result);
    return $array[0];
}
function selectStudentCountByUnEC($entrance,$college){
    $sql = sprintf("select count(*) from student,register where student.entrance='%s' and student.college='%s' and register.id=student.id and register.state='未注册'",$entrance,$college);
    $result=  mysql_query($sql);
    $array= mysql_fetch_row($result);
    return $array[0];
}
function selectStudentCountByECM($entrance,$college,$major){
    $sql = sprintf("select count(*) from student where entrance='%s' and college='%s' and major='%s'",$entrance,$college,$major);
    $result=  mysql_query($sql);
    $array= mysql_fetch_row($result);
    return $array[0];
}
function selectStudentCountByUnECM($entrance,$college,$major){
    $sql = sprintf("select count(*) from student,register where student.entrance='%s' and student.college='%s' and student.major='%s' and register.id=student.id and register.state='未注册'",$entrance,$college,$major);
    $result=  mysql_query($sql);
    $array= mysql_fetch_row($result);
    return $array[0];
}
function selectUserByID($id){
    $sql= sprintf("select * from user where id='%s'",$id);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'学生账号查询失败'.mysql_errno();
    }
}
function updateUser($password,$id,$password_old){
    $sql = sprintf("update user set password='%s' where id = '%s' and password='%s'",$password,$id,$password_old);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo $sql;
        echo'学生账号数据更新失败'.mysql_errno();
    }
}


//入学时间操作
function selectEntrance(){
    $sql = sprintf("select * from entrance");
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'入学时间数据查询失败'.mysql_errno();
    }
}


//系统功能设置操作
function selectSetUp(){
    $sql = sprintf("select * from setup ");
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'功能数据查询失败'.mysql_errno();
    }
}
function selectSetUpByName($name){
    $sql = sprintf("select * from setup where name = '%s'",$name);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'功能数据查询失败'.mysql_errno();
    }
}
function updateSetUpByName($state,$mark,$start,$end,$name){
    $sql = sprintf("update setup set state='%s',mark='%s',startTime='%s',endTime='%s' where name = '%s'",$state,$mark,$start,$end,$name);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo $sql;
        echo'功能数据更新失败'.mysql_errno();
    }
}



//学期注册操作
function updateRegisterMark($mark,$state,$mark_old,$state_old){
    $sql = sprintf("update register set mark='%s',state='%s'where mark='%s'and state='%s'",$mark,$state,$mark_old,$state_old);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'注册数据更新失败'.mysql_errno();
    }
}
function updateRegisterByID($id){
    $sql = sprintf("update register set state='注册' where id='%s'",$id);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'注册数据更新失败'.mysql_errno();
    }
}
function selectRegisterByID($id){
    $sql = sprintf("select * from register where id='%s'",$id);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'注册数据查询失败'.mysql_errno();
    }
}
function updateRegisterAllByEMC($entrance,$college,$major){
    $sql = sprintf("select register.id from student,register where student.entrance='%s' and student.college='%s' and student.major='%s' and register.id=student.id and register.state='未注册'",$entrance,$college,$major);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'注册数据修改失败'.mysql_errno();
    }
}
function updateRegisterResult($result,$id){
    if($result==="通过"){
        $sql = sprintf("update register set state='特殊注册',result='通过'where id='%s'",$id);
    }else if($result==="未通过"){
        $sql = sprintf("update register set result='未通过'where id='%s'",$id);
    }
    $result=mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'注册数据修改失败'.mysql_errno();
    }
}



function insertElective($id,$course,$mark,$hours,$credits){
    $sql = sprintf("insert into elective(id,course,mark,hours,credits)values('%s','%s','%s','%s','%s')",$id,$course,$mark,$hours,$credits);
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        
        echo'选课数据添加失败'.$sql.mysql_errno();
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



//缴费情况操作
function insertPay($id,$pay){
    $sql = sprintf("insert into pay(id,pay) values('%s','%s')",$id,$pay);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'缴费数据添加失败'.mysql_errno();
    }
}


//学生成绩操作
function insertScore($id_student,$mark,$id_course,$course,$hours,$credits,$score){
    $sql = sprintf("insert into score(id_student,mark,id_course,course,hours,credits,score) values('%s','%s','%s','%s','%s','%s','%s')",$id_student,$mark,$id_course,$course,$hours,$credits,$score);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo $sql;
        echo'成绩数据添加失败'.mysql_errno();
    }
}

//学业预警
function selectCountTermScoreViewByMark($mark){
    $sql = sprintf("select * from v_counttermscore WHERE `SUM(acquired)`<=18 and mark='%s'",$mark);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo $sql;
        echo'预警数据添加失败'.mysql_errno();
    }
}

//毕业审核
function selectGraduationByEntrance($entrance){
    $sql = sprintf("select * from v_graduation WHERE entrance='%s'",$entrance);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo $sql;
        echo'审核数据查询失败'.mysql_errno();
    }
}
function selectProgramViewByMajor($major){
    $sql = sprintf("select * from v_program WHERE major='%s'",$major);
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo $sql;
        echo'审核数据查询失败'.mysql_errno();
    }
}

//学籍异动操作
function selectTransaction(){
    $sql = sprintf("select * from transaction");
//    echo $sql;
    $result=  mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo $sql;
        echo'异动数据查询失败'.mysql_errno();
    }
}
function updateTransactionResult($result,$id){
    if($result==="通过"){
        $sql = sprintf("update transaction set result='通过'where id='%s'",$id);
    }else if($result==="未通过"){
        $sql = sprintf("update transaction set result='未通过'where id='%s'",$id);
    }
    $result=mysql_query($sql);
    if($result){
        return $result;
    }else{
        echo'注册数据修改失败'.mysql_errno();
    }
}