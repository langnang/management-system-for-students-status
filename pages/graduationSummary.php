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
    <body class="bg-3">





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


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>毕业审核管理</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.php">主页</a></li>
                                <li class="active">毕业汇总</li>
                            </ol>
                        </div>


                    </div>
                    <!-- /page header -->



                    <!-- content main container -->
                    <div class="main">


                        <!-- row -->
                        <div class="row">


                            <!-- col 12 -->
                            <div class="col-md-12" >
                                <!-- tile -->
                                <section class="tile transparent">


                                    <div class="jumbotron bg-transparent-black-5" id="registerState">

                                        <div class="container text-center" >
                                            <h1>毕业审核汇总</h1>
                                            <p>毕业审核功能主要针对预毕业学生的学籍信息进行管理，是否符合学生毕业要求。</p>
                                            <p>本功能主要用于筛选出符合毕业要求与不符合毕业要求的学生。</p>
                                            <p>上次运行的时间：{{set.startTime}}</p>
                                            <p>上次运行的学年标志：{{set.mark}}</p>
                                            <p><button type="button" class="btn btn-primary btn-lg margin-bottom-20" v-on:click="startRegister()"> {{set.state}}</button></p>
                                        </div>

                                    </div>



                                </section>
                                <!-- /tile -->



                                <!-- tile -->
                                <section class="tile transparent">


                                    <!-- tile header -->
                                    <div class="tile-header transparent">
                                        <h1><strong>毕业审核</strong> 汇总 
                                        </h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body color transparent-white rounded-corners" >

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
                $("#navigation").children("ul").children("li").eq(5).addClass("active open");
                $("#navigation").children("ul").children("li").eq(5).children("ul").children("li").eq(0).addClass("active");


                var reg_vue = new Vue({
                    el: "#registerState",
                    data: {
                        set: []
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            $.ajax({
                                url: "../action/setup_selectbyname.php",
                                async: "false",
                                data: {name: "毕业审核"},
                                type: "post",
                                dataType: "json",
                                success: function (msg) {
                                    reg_vue.set = msg[0];
                                }
                            });
                        });
                    },
                    updated: function () {
                        this.$nextTick(function () {
                            if (reg_vue.set.state === "关闭") {
                                $("#registerState button").eq(0).text("开启毕业审核");
                            } else {
                                $("#registerState button").eq(0).text("毕业审核运行中");
                                $("#registerState button").eq(0).attr("disabled", "");
                            }
                        });
                    },
                    methods: {
                        startRegister: function () {
                            if (confirm("确定开启毕业审核么")) {
                                $.ajax({
                                    url: "../action/setup_selectbyname.php",
                                    async: "false",
                                    data: {name: "学期注册"},
                                    type: "post",
                                    dataType: "json",
                                    success: function (msg) {
//                                    console.log(msg[0].mark);
                                        if (confirm("本次开启审核的学年标志为" + msg[0].mark.substring(0,4))) {
                                            var mark = msg[0].mark.substring(0,4);
                                            function p(s) {
                                                return s < 10 ? '0' + s : s;
                                            }

                                            var myDate = new Date();
//获取当前年
                                            var year = myDate.getFullYear();
//获取当前月
                                            var month = myDate.getMonth() + 1;
//获取当前日
                                            var date = myDate.getDate();
                                            var h = myDate.getHours();       //获取当前小时数(0-23)
                                            var m = myDate.getMinutes();     //获取当前分钟数(0-59)
                                            var s = myDate.getSeconds();

                                            var now = year + '-' + p(month) + "-" + p(date) + " " + p(h) + ':' + p(m) + ":" + p(s);
                                            console.log(now);
                                            $.ajax({
                                                url: "../action/setup_updatebyname.php",
                                                type: "post",
                                                data: {name: "毕业审核", state: "关闭", mark: mark, startTime: now, endTime: "0"},
                                                success: function (msg) {
                                                    console.log(msg);
                                                    if (msg === "1") {
                                                        alert("毕业审核运行成功，已关闭！");
                                                    } else {
                                                        alert("毕业审核开启失败");
                                                    }
                                                }
                                            });


                                        }
                                    }
                                });
                            }
                        }
                    }

                });

            });

        </script>
    </body>
</html>

