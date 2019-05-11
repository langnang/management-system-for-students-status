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


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>注册管理</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.php">主页</a></li>
                                <li class="active">注册管理</li>
                                <li class="active">学期注册</li>
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



                                    <div class="jumbotron bg-transparent-black-3">

                                        <div class="container text-center" id="register">
                                            <h1>学期注册</h1>
                                            <h3></h3>
                                            <p></p>
                                            <a class="btn btn-red btn-lg" disabled v-on:click="register()"></a>
                                        </div>

                                    </div>


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
                 $("#navigation").children("ul").children("li").eq(1).addClass("active open");
                 $("#navigation").children("ul").children("li").eq(1).children("ul").children("li").eq(0).addClass("active");

                var reg_vue = new Vue({
                    el: "#register",
                    data: {
                        reg: []
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            $.ajax({
                                url: "../action/setup_selectbyname.php",
                                data: {name: "学期注册"},
                                type: "post",
                                dataType: "json",
                                success: function (msg) {
                                    reg_vue.reg = msg[0];
                                }
                            });
                        });
                    },
                    watch: {
                        reg: function () {
                            console.log(this.reg.state);
                            if (this.reg.state === "运行") {
                                $("#register h1").text($("#register h1").text() + "运行中");
                                $("#register h3").text(this.reg.mark);
                                $("#register p").text(this.reg.startTime + "~" + this.reg.endTime);

                                $.ajax({
                                    url: "../action/register_selectByIM.php",
                                    data: {id: id, mark: this.reg.mark},
                                    type: "post",
                                    success: function (msg) {
                                        console.log(msg);
                                        if (msg === "未注册") {
                                            $("#register a").removeAttr("disabled");
                                            $("#register a").text("点击注册");
                                        } else {
                                            $("#register a").text("已注册");
                                        }
                                    }
                                })
                            } else {
                                $("#register h1:first").text($("#register h1").text() + "已关闭");
                            }
                        }
                    },
                    methods: {
                        register: function () {
                            $.ajax({
                                url: "../action/pay_selectByID.php",
                                data: {id: id},
                                type: "post",
                                dataType:"json",
                                success: function (msg) {
                                    if(msg[0].pay==="缴清"){
                                        $.ajax({
                                url: "../action/register_update.php",
                                data: {id: id, mark: this.reg.mark},
                                type: "post",
                                success: function (msg) {
                                    if (msg === "1") {
                                        alert(id + "注册成功");
                                    } else {
                                        alert(id + "注册失败");
                                    }
                                }
                            })
                                    }else{
                                        alert("费用未缴清，无法注册！");
                                    }
//                                    console.log(msg);
//                                    if (msg === "1") {
//                                        alert(id + "注册成功");
//                                    } else {
//                                        alert(id + "注册失败");
//                                    }
                                }
                            });
//                            $.ajax({
//                                url: "../action/register_update.php",
//                                data: {id: id, mark: this.reg.mark},
//                                type: "post",
//                                success: function (msg) {
//                                    if (msg === "1") {
//                                        alert(id + "注册成功");
//                                    } else {
//                                        alert(id + "注册失败");
//                                    }
//                                }
//                            })
                        }
                    }
                })


            });

        </script>
    </body>
</html>

