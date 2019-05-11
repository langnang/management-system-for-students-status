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


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>个人信息</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.html">主页</a></li>
                                <li class="active">个人信息</li>
                                <li class="active">信息修改</li>
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
                                <section class="tile color transparent-black">


                                    <!-- tile header -->
                                    <div class="tile-header transparent">
                                        <h1><strong>个人信息</strong> 修改
                                        </h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body" id="studentInformation">

                                        <form class="form-horizontal" role="form" v-for="(s,index) in stu">

                                            <div class="form-group">
                                                <label for="input01" class="col-sm-3 control-label">学号</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input01" disabled="" v-bind:value="s.id">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input01" class="col-sm-3 control-label">姓名</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input01" disabled="" v-bind:value="s.name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input01" class="col-sm-3 control-label">性别</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input01" disabled="" v-bind:value="s.sex">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input01" class="col-sm-3 control-label">年龄</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input01" disabled="" v-bind:value="s.age">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="input02" class="col-sm-3 control-label">身份证号</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input01" disabled="" v-bind:value="s.card">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input03" class="col-sm-3 control-label">户籍</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input01" disabled="" v-bind:value="s.house">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input03" class="col-sm-3 control-label">入学时间</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input01" disabled=""  v-bind:value="s.entrance">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input03" class="col-sm-3 control-label">学院</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input01" disabled="" v-bind:value="s.college">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input03" class="col-sm-3 control-label">专业</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input01" disabled="" v-bind:value="s.major">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input03" class="col-sm-3 control-label">联系方式</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="input01" v-bind:value="s.contact">
                                                </div>
                                                <button type="button" class="btn btn-primary col-sm-1" v-on:click="updateStudentContact(index)">修改</button>
                                            </div>




                                        </form>

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
                
                $("#navigation").children("ul").children("li").eq(4).addClass("active open");
                 $("#navigation").children("ul").children("li").eq(4).children("ul").children("li").eq(1).addClass("active");
                console.log(id);

                console.log($("form input").length);
                $("form input:first").val(id);

                var stu_vue = new Vue({
                    el: "#studentInformation",
                    data: {
                        stu: []
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            $.ajax({
                                url:"../action/student_selectById.php",
                                data:{id:id},
                                type:"post",
                                dataType:"json",
                                success:function(msg){
                                    console.log(msg[0]);
                                    stu_vue.stu=msg;
                                }
                            })
                        });
                    },
                    methods:{
                        updateStudentContact(index){
                            console.log(index);
                        }
                    }
                })


            });

        </script>
    </body>
</html>

