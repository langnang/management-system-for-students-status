<!DOCTYPE html>
<html>
    <head>
        <title>高校学籍管理系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8" />

        <?php
        include "parts/cssList.php";
        ?>
    </head>
    <body class="bg-2">





        <!-- Preloader -->
        <div class="mask"><div id="loader"></div></div>
        <!--/Preloader -->

        <!-- Wrap all page content here -->
        <div id="wrap">




            <!-- Make page fluid -->
            <div class="row">





                <!-- Fixed navbar -->
                <?php include "parts/fixedNavbar.php"; ?>
                <!-- Fixed navbar end -->


                <!-- Page content -->
                <div id="content" class="col-md-12">









                    <!-- page header -->
                    <div class="pageheader">


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>学籍成绩</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.html">主页</a></li>
                                <li class="active">学籍成绩</li>
                                <li class="active">培养方案</li>
                            </ol>
                        </div>


                    </div>
                    <!-- /page header -->



                    <!-- content main container -->
                    <div class="main">


                        <!-- row -->
                        <div class="row">


                            <!-- col 12 -->
                            <div class="col-md-12">



                                <!-- tile -->
                                <section class="tile transparent">


                                    <!-- tile header -->
                                    <div class="tile-header transparent">
                                        <h1><strong>培养方案</strong> 
                                        </h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body color transparent-white rounded-corners" >

                                        
                                       <div class="table-responsive" id="basicProgram">

                                            <table  class="table table-datatable table-custom text-center">
                                                <thead>
                                                    <tr class="">
                                                        <th class="sort-alpha text-center">课程类别</th>
                                                        <th class="sort-alpha text-center">课程号</th>
                                                        <th class="sort-alpha text-center">课程名</th>
                                                        <th class="sort-alpha text-center">学时</th>
                                                        <th class="sort-alpha text-center">学分</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX" v-for="(g,index) in general">
                                                        <td>通识教育基础课程</td>
                                                        <td>{{g.id}}</td>
                                                        <td>{{g.course}}</td>
                                                        <td>{{g.hours}}</td>
                                                        <td>{{g.credits}}</td>
                                                    </tr>
                                                    <tr class="odd gradeX" v-for="(g,index) in subject">
                                                        <td>学科平台基础课程</td>
                                                        <td>{{g.id}}</td>
                                                        <td>{{g.course}}</td>
                                                        <td>{{g.hours}}</td>
                                                        <td>{{g.credits}}</td>
                                                    </tr>
                                                    <tr class="odd gradeX" v-for="(g,index) in professional">
                                                        <td>专业课</td>
                                                        <td>{{g.id}}</td>
                                                        <td>{{g.course}}</td>
                                                        <td>{{g.hours}}</td>
                                                        <td>{{g.credits}}</td>
                                                    </tr>
                                                    <tr class="odd gradeX" v-for="(g,index) in practical">
                                                        <td>实践性环节</td>
                                                        <td>{{g.id}}</td>
                                                        <td>{{g.course}}</td>
                                                        <td>{{g.hours}}</td>
                                                        <td>{{g.credits}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="row">
                                                <div class="col-md-4 sm-center">
                                                    <div class="" id="basicDataTable_info" style="padding: 5px 8px;">
                                                        Showing {{page.min}} to {{page.max}} of {{length}} entries
                                                    </div>
                                                </div>

                                                <div class="col-md-8 text-right sm-center">
                                                    <div class="dataTables_paginate  paging_custombootstrap" >
                                                        <ul class="pagination">
                                                            <li class="prev disabled"><a  href="#">Previous</a></li>
                                                            <li class="active"><a  href="#">1</a></li>
                                                            <li class="next disabled"><a href="#">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- /tile body -->



                                </section>
                                <!-- /tile -->


                            </div>
                            <!-- /col 12 -->


                        </div>
                        <!-- /row -->


                    </div>

                    <!-- /content main container end-->





                </div>
                <!-- Page content end -->






            </div>
            <!-- Make page fluid-->




        </div>
        <!-- Wrap all page content end -->



        <section class="videocontent" id="video"></section>



        <?php
        include "parts/jsList.php";
        ?>

        <script>
            $(function () {
                
                $("#navigation").children("ul").children("li").eq(3).addClass("active open");
                 $("#navigation").children("ul").children("li").eq(3).children("ul").children("li").eq(1).addClass("active");
//                console.log(id);
                $.ajax({
                    url:"../action/student_selectById.php",
                    data:{id:id},
                    type:"post",
                    dataType:"json",
                    success:function(msg){
                        $.ajax({
                        url: "../action/programs_select.php",
                        data: {major: msg[0].major},
                        type: "post",
                        async: true,
                        dataType: 'json',
                        success: function (msg) {
                            pro_vue.pro = msg;
                        }
                    });
                    }
                });

                
                var pro_vue = new Vue({
                    el: "#basicProgram",
                    data: {
                        pro: [],
                        general: [],
                        subject: [],
                        professional: [],
                        practical: [],
                        page: [],
                        length: "",
                        srh: ""
                    },
                    watch: {
                        pro: function () {
                            for (i = 0; i <= this.pro.length - 1; i++) {
                                if (this.pro[i].type === "通识教育基础课程") {
                                    var courseID = this.pro[i].program.split(",");
//                                    console.log(courseID);
                                    var str = '';
                                    var json;
                                    for (var j = 0; j <= courseID.length - 1; j++) {
                                        $.ajax({
                                            url: "../action/course_selectByID.php",
                                            data: {id: courseID[j]},
                                            type: "post",
                                            success: function (msg) {
//                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                pro_vue.subject = JSON.parse(json);
                                            }
                                        })
                                    }

                                }else if(this.pro[i].type === "学科平台基础课程"){
                                    var courseID = this.pro[i].program.split(",");
//                                    console.log(courseID);
                                    var str = '';
                                    var json;
                                    for (var j = 0; j <= courseID.length - 1; j++) {
                                        $.ajax({
                                            url: "../action/course_selectByID.php",
                                            data: {id: courseID[j]},
                                            type: "post",
                                            success: function (msg) {
//                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                pro_vue.general = JSON.parse(json);
                                            }
                                        })
                                    }
                                }else if(this.pro[i].type === "专业课"){
                                    var courseID = this.pro[i].program.split(",");
//                                    console.log(courseID);
                                    var str = '';
                                    var json;
                                    for (var j = 0; j <= courseID.length - 1; j++) {
                                        $.ajax({
                                            url: "../action/course_selectByID.php",
                                            data: {id: courseID[j]},
                                            type: "post",
                                            success: function (msg) {
//                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                pro_vue.professional = JSON.parse(json);
                                            }
                                        })
                                    }
                                }else if(this.pro[i].type === "实践性环节"){
                                    var courseID = this.pro[i].program.split(",");
//                                    console.log(courseID);
                                    var str = '';
                                    var json;
                                    for (var j = 0; j <= courseID.length - 1; j++) {
                                        $.ajax({
                                            url: "../action/course_selectByID.php",
                                            data: {id: courseID[j]},
                                            type: "post",
                                            success: function (msg) {
//                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                pro_vue.practical = JSON.parse(json);
                                            }
                                        })
                                    }
                                }
                            }
                        }
                    }
                });

            });

        </script>
    </body>
</html>

