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
                                <li class="active">学籍异动</li>
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
                                        <h1><strong>学籍异动</strong> 申请</h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div> 
                                    <!--/tile header--> 

                                    <!-- tile body -->
                                    <div class="tile-body" id="transaction">

                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="input07" class="col-sm-3 control-label">申请类别</label>
                                                <div class="col-sm-9">
                                                    <select class="chosen-select chosen-transparent form-control" id="input07">
                                                        <option>转专业</option>
                                                        <option>转学</option>
                                                        <option>休学</option>
                                                        <option>复学</option>
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
                $("#navigation").children("ul").children("li").eq(3).addClass("active open");
                $("#navigation").children("ul").children("li").eq(3).children("ul").children("li").eq(2).addClass("active");



                $.ajax({
                    url: "../action/setup_selectbyname.php",
                    data: {name: "学籍异动"},
                    type: "post",
                    dataType: "json",
                    success: function (msg) {
                        var state = msg[0].state;
                        console.log(state);
                        if (state !== "运行") {
                            $("#register form:first").css({display: 'none'});
                        }

                    }
                });

                submitApply = function () {
                    var type = $("#transaction form:first select").val();
                    var reason = $("#transaction form:first textarea").val();
                    
                    $.ajax({
                        url: "../action/transaction_insertApply.php",
                        data: {id: id, type: type, reason:reason},
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

        </script>
    </body>
</html>

