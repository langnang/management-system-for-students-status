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


          <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>// 介绍</span></h2>


          <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li>位置</li>
              <li><a href="index.php">主页</a></li>
              <li class="active">index</li>
            </ol>
          </div>


        </div>
        <!-- /page header -->



        <!-- content main container -->
        <div class="main">
          <section class="tile transparent">
            <div class="jumbotron bg-transparent-black-3">
              <div class="container text-center">
                <h1>高校学籍管理系统</h1>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              </div>
            </div>
          </section>
          <section class="tile transparent">
            <div class="tile-header transparent">
              <h1><strong>基本信息</strong> 汇总</h1>
              <div class="controls">
                <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                <a href="#" class="remove"><i class="fa fa-times"></i></a>
              </div>
            </div>
            <div class="tile-body color transparent-black rounded-corners">
              <div class="row cards">
                <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                  <div class="card card-redbrown hover">
                    <div class="front"> 
                      <div class="media">        
                        <span class="pull-left">
                          <i class="fa fa-users media-object"></i>
                        </span>
                        <div class="media-body">
                          <small>总学生数</small>
                          <h2 class="media-heading animate-number" data-value="3659" data-animation-duration="1500">1000</h2>
                        </div>
                      </div> 



                    </div>
                    <div class="back">
                      <a href="#">
                        <i class="fa fa-bar-chart-o fa-4x"></i>
                      </a>  
                    </div>
                  </div>
                </div>


                <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                  <div class="card card-blue hover">
                    <div class="front">        

                      <div class="media">                  
                        <span class="pull-left">
                          <i class="fa fa-shopping-cart media-object"></i>
                        </span>

                        <div class="media-body">
                          <small>学院数</small>
                          <h2 class="media-heading animate-number" data-value="19214" data-animation-duration="1500">0</h2>
                        </div>
                      </div> 



                    </div>
                    <div class="back">
                      <a href="#">
                        <i class="fa fa-bar-chart-o fa-4x"></i>
                        <span>Check Summary</span>
                      </a>
                    </div>
                  </div>
                </div>



                <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                  <div class="card card-greensea hover">
                    <div class="front">        

                      <div class="media">
                        <span class="pull-left">
                          <i class="fa fa-usd media-object"></i>
                        </span>

                        <div class="media-body">
                          <small>专业数</small>
                          <h2 class="media-heading animate-number" data-value="169541" data-animation-duration="1500">0</h2>
                        </div>
                      </div>


                    </div>
                    <div class="back">
                      <a href="#">
                        <i class="fa fa-bar-chart-o fa-4x"></i>
                        <span>Check Summary</span>
                      </a>
                    </div>
                  </div>
                </div>


                <div class="card-container col-lg-3 col-sm-6 col-xs-12">
                  <div class="card card-slategray hover">
                    <div class="front"> 

                      <div class="media">                   
                        <span class="pull-left">
                          <i class="fa fa-eye media-object"></i>
                        </span>

                        <div class="media-body">
                          <small>访问量</small>
                          <h2 class="media-heading animate-number" data-value="9634" data-animation-duration="1500">0</h2>
                        </div>
                      </div> 



                    </div>
                    <div class="back">
                      <a href="#">
                        <i class="fa fa-bar-chart-o fa-4x"></i>
                        <span>Check Summary</span>
                      </a>
                    </div>
                  </div>
                </div>


              </div>
              <!-- /cards -->
            </div>
          </section>



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
    $(function(){
        $("#navigation").children("ul").children("li").eq(0).addClass("active");

    });

  </script>
</body>
</html>

