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


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>学期注册管理</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.php">主页</a></li>
                                <li>学期注册</li>
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
                                            <h1>学期注册汇总</h1>
                                            <p>学期注册管理功能主要针对在校学生的新学期报到注册管理</p>
                                            <p>管理员在开启新学期的注册功能时，需在注册功能页面填写学期标志、开始时间、结束时间等相关信息。</p>
                                            <p><button type="button" class="btn btn-primary btn-lg margin-bottom-20" v-on:click="startRegister()"> {{set.state}}</button></p>

                                        </div>
                                        <form class="form-horizontal" role="form" style="display: none;">
                                            <div class="form-group col-sm-4">
                                                <label for="endTime" class="col-sm-5 control-label">学期标志</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="endTime" v-bind:value="set.mark" disabled="">
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="startTime" class="col-sm-4 control-label">开始时间</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="startTime" v-bind:value="set.startTime" disabled="">
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="endTime" class="col-sm-4 control-label">结束时间</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="endTime" v-bind:value="set.endTime" disabled="">
                                                </div>
                                            </div>
                                            
                                        </form>

                                        <form class="form-horizontal" role="form" style="display: none;">
                                            <div class="form-group col-sm-6">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <input type="text" class="form-control" id="startdatepicker" placeholder="开始时间">
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <div class="col-sm-8 col-sm-offset-4">
                                                    <input type="text" class="form-control" id="enddatepicker" placeholder="结束时间">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="text" class="form-control" placeholder="学期标志">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-greensea col-sm-3 col-md-offset-3" v-on:click="submitRegister()">Submit</button>
                                                    <button type="reset" class="btn btn-red col-sm-3 ">Reset</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>



                                </section>
                                <!-- /tile -->



                                <!-- tile -->
                                <section class="tile transparent">


                                    <!-- tile header -->
                                    <div class="tile-header transparent">
                                        <h1><strong>学期注册</strong> 汇总 
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
                $("#navigation").children("ul").children("li").eq(2).addClass("active open");
                $("#navigation").children("ul").children("li").eq(2).children("ul").children("li").eq(0).addClass("active");
                
                var time =new Date();
                console.log(time)

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
                                data: {name: "学期注册"},
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
                                $("#registerState button").eq(0).text("开启学期注册");
                                $("#registerState form").eq(0).css({display: "block"});
                            } else {
                                $("#registerState button").eq(0).text("学期注册运行中");
                                $("#registerState button").eq(0).attr("disabled", "");
                                $("#registerState form").eq(0).css({display: "block"});
                                
                            }
                        });
                    },
                    methods: {
                        startRegister: function () {
                            if (confirm("确定开启学期注册么")) {
//                                console.log(123);
//                                console.log($("#registerState form").length);
                                $("#registerState button").eq(0).attr("disabled", "");
                                $("#registerState form").eq(1).css({display: "block"});
//                                console.log($("#registerState form:last button").length);
                                $("#registerState form:last input").eq(1).attr("disabled", "");
                                $("#registerState form:last button").eq(0).attr("disabled", "");
                                $('#startdatepicker').datetimepicker({
                                    icons: {
                                        time: "fa fa-clock-o",
                                        date: "fa fa-calendar",
                                        up: "fa fa-arrow-up",
                                        down: "fa fa-arrow-down"
                                    }
                                });
                                $('#enddatepicker').datetimepicker({
                                    icons: {
                                        time: "fa fa-clock-o",
                                        date: "fa fa-calendar",
                                        up: "fa fa-arrow-up",
                                        down: "fa fa-arrow-down"
                                    }
                                });
                                var top_new;
                                $("#startdatepicker").on("dp.show", function (e) {
                                    var starttop = $('.bootstrap-datetimepicker-widget').position().top - 45;
                                    $('.bootstrap-datetimepicker-widget').css('top', starttop + 'px');
                                    top_new = starttop;
                                    $("#registerState form:last input").eq(1).removeAttr("disabled");

//                                    console.log(top);

                                });


                                $("#enddatepicker").on("dp.show", function (e) {
                                    $('.bootstrap-datetimepicker-widget').css('top', top_new + 'px');
                                    $("#registerState form:last button").eq(0).removeAttr("disabled");
                                });




                            }
                        },
                        submitRegister: function () {
                            if (confirm("确定开启学期注册？")) {
                                formatDate = function (str) {
                                    var date = str.split(" ")[0].split("/");
                                    var time = str.split(" ")[1].split(":");
                                    time.push("00");
                                    if (str.split(" ")[2] === "PM") {
                                        var hou = new Number(time[0]);
                                        time[0] = hou + 12;
                                    }
                                    var year = date.pop();
                                    date.unshift(year);
                                    return date.join("-") + " " + time.join("-");
                                };
                                var start = $("#registerState form:last input").eq(0).val();
                                var end = $("#registerState form:last input").eq(1).val();
                                var mark = $("#registerState form:last input").eq(2).val();
                                $.ajax({
                                    url: "../action/setup_updatebyname.php",
                                    type: "post",
                                    data: {name: "学期注册", state: "运行",mark:mark, startTime: formatDate(start), endTime: formatDate(end)},
                                    success: function (msg) {
                                        console.log(msg);
                                        if (msg === "1") {
                                            alert(mark+"学期注册开启成功！");
                                            location.reload();
//                                            $.ajax({
//                                                url: "../action/register_update.php",
//                                                type: "post",
//                                                data: {mark: mark,state:"未注册",mark_old:'',state_old:'未注册'},
//                                                success: function (msg) {
////                                                    console.log(msg);
//                                                }
//                                            });
                                        } else {
                                            alert(mark+"学期注册开启失败!");
                                            location.reload();
                                        }
                                    }
                                });
//                                
                            }

                        }
                    }

                });

            });

        </script>
    </body>
</html>

