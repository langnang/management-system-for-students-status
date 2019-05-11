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
                                <li class="active">个人成绩</li>
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
                                        <h1><strong>个人成绩</strong> 
                                        </h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body color transparent-white rounded-corners" id="statusScore">

                                        <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-offset-4 col-sm-4" style="padding:0;">
                                                <input type="text" id="search" style="width: 100%;font-size:17px;float:right;border: 0;background: none;color: rgba(255, 255, 255, 0.6);border-bottom: 1px solid rgba(255, 255, 255, 0.15);padding:6px 0px !important;" placeholder="搜索">
                                            </div>
                                        </div>
                                    </div>
                                        
                                        <div class="table-responsive">



                                            <table  class="table table-datatable table-custom text-center">
                                                <thead>
                                                    <tr class="">
                                                        <th class="sort-alpha text-center">学期</th>
                                                        <th class="sort-alpha text-center">课程号</th>
                                                        <th class="sort-alpha text-center">课程名</th>
                                                        <th class="sort-alpha text-center">学时</th>
                                                        <th class="sort-alpha text-center">学分</th>
                                                        <th class="sort-alpha text-center">成绩</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX" v-for="(s,index) in score">
                                                        <td>{{s.mark}}</td>
                                                        <td>{{s.id_course}}</td>
                                                        <td>{{s.course}}</td>
                                                        <td>{{s.hours}}</td>
                                                        <td>{{s.credits}}</td>
                                                        <td>{{s.score}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="row">
                                                <div class="col-md-12 sm-center">
                                                    <div class="" id="basicDataTable_info" style="padding: 5px 8px;">
                                                        Showing {{page.min}} to {{page.max}} of {{length}} entries
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
                 $("#navigation").children("ul").children("li").eq(3).children("ul").children("li").eq(0).addClass("active");
                
                
                var sco_vue=new Vue({
                    el:"#statusScore",
                    data:{
                        score:[],
                        page:[],
                        length:"",
                        srh:""
                    },
                    mounted:function(){
                        this.$nextTick(function(){
                            $.ajax({
                                url:"../action/score_selectByID.php",
                                data:{id_student:id},
                                type:"post",
                                dataType:"json",
                                success:function(msg){
                                    sco_vue.score=msg;
                                }
                            })
                        })
                    }
                })
            });

        </script>
    </body>
</html>

