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
                                <li class="active">修改密码</li>
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
                                        <h1><strong>登陆密码</strong> 修改
                                        </h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body">

                                        <form class="form-horizontal" role="form">

                                            <div class="form-group">
                                                <label for="input01" class="col-sm-3 control-label">账号</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="input01" disabled="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="input02" class="col-sm-3 control-label">旧密码</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="input02">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input03" class="col-sm-3 control-label">新密码</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="input03">
                                                </div>
                                            </div>

                                            

                                            <div class="form-group form-footer">
                                                <div class="col-sm-offset-5 col-sm-2">
                                                    <button type="button" class="btn btn-primary col-sm-12" onclick="updatePassword()">修改</button>
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
                $("#navigation").children("ul").children("li").eq(4).addClass("active open");
                 $("#navigation").children("ul").children("li").eq(4).children("ul").children("li").eq(0).addClass("active");
                
                console.log(id);
                
                console.log($("form input").length);
                $("form input:first").val(id);
                
                
                updatePassword=function(){
                    console.log($("form input").eq(0).val());
                     console.log($("form input").eq(1).val());
                      console.log($("form input").eq(2).val());
                      $.ajax({
                        url:"../action/user_update.php",
                        type:"post",
                        data:{
                            id:$("form input").eq(0).val(),
                            password_old:$("form input").eq(1).val(),
                            password:$("form input").eq(2).val()
                        },
                        success:function(msg){
                            console.log(msg);
//                            if(msg==="1"){
//                               
//                            }
                        }
                    });
                    
                }

            });

        </script>
    </body>
</html>

