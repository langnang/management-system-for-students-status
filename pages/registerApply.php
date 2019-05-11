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
                                <li class="active">特殊注册</li>
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



                                    <!--tile header--> 
                                    <div class="tile-header">
                                        <h1><strong>特殊注册</strong> 申请</h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div> 
                                    <!--/tile header--> 

                                    <!-- tile body -->
                                    <div class="tile-body" id="register">

                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="input07" class="col-sm-3 control-label">申请类别</label>
                                                <div class="col-sm-9">
                                                    <select class="chosen-select chosen-transparent form-control" id="input07">
                                                        <option checked="">特殊注册</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="input05" class="col-sm-3 control-label">申请理由</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="input05" rows="6"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group form-footer">
                                                <div class="col-sm-offset-4 col-sm-4">
                                                    <button type="button" class="btn btn-primary col-sm-12" onclick="submitApply()">提交申请</button>
                                                </div>
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
                $("#navigation").children("ul").children("li").eq(1).addClass("active open");
                $("#navigation").children("ul").children("li").eq(1).children("ul").children("li").eq(1).addClass("active");
                
                
                            
                            $.ajax({
                        url: "../action/setup_selectbyname.php",
                        data: {name: "学期注册"},
                        type: "post",
                        dataType: "json",
                        success: function (msg) {
                            var mark = msg[0].mark;
                            $.ajax({
                                    url: "../action/register_selectByIM.php",
                                    data: {id: id, mark: mark},
                                    type: "post",
                                    success: function (msg) {
                                        console.log(msg);
                                        if (msg !== "未注册") {
                                            $("#register form:first").css({display:'none'});
                                        } else {
                                            
                                        }
                                    }
                                })
                        }
                    });

                submitApply = function () {
                    
//                    var reason=$("#register form:first textarea").val();
//                    var reason = $("#register form:first textarea").eq(0).value;
//                    console.log(reason);
//                    
                    $.ajax({
                        url: "../action/setup_selectbyname.php",
                        data: {name: "学期注册"},
                        type: "post",
                        dataType: "json",
                        success: function (msg) {
                            var mark = msg[0].mark;
                            var reason =$("#register form:first textarea").val();
                            
                                            $.ajax({
                                        url: "../action/register_updateApply.php",
                                        data: {id: id, mark: mark, reason: reason},
                                        type: "post",
                                        success: function (msg) {
                                            console.log(msg);
                                            if (msg === "1") {
                                                alert(id + "申请成功");
                                            } else {
                                                alert(id + "申请失败");
                                            }
                                        }
                                    });
                             
                        }
                    });
                };
            });

        </script>
    </body>
</html>

