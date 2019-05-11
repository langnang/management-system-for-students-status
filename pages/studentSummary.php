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


          <h2><i class="fa fa-tachometer"></i> 学生信息汇总<span>// 介绍</span></h2>


          <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li>位置</li>
              <li><a href="index.php">主页</a></li>
              <li class="active">学生信息管理</li>
              <li class="active">汇总</li>
            </ol>
          </div>


        </div>
        <!-- /page header -->



        <!-- content main container -->
        <div class="main">


          <!-- row -->
          <div class="row">


            <!-- col 8 -->
            <div class="col-lg-8 col-md-12">




              <!-- tile -->
              <section class="tile transparent">




                <!-- tile header -->
                <div class="tile-header color transparent-black textured rounded-top-corners">
                  <h1><strong>在校人数</strong> 汇总</h1>
                  <div class="controls">
                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                    <a href="#" class="remove"><i class="fa fa-times"></i></a>
                  </div>
                </div>
                <!-- /tile header -->


                <!-- tile widget -->
                <div class="tile-widget color transparent-black textured">
                  <div id="statistics-chart" class="chart statistics" style="height: 250px;"></div>
                </div>
                <!-- /tile widget -->






              </section>
              <!-- /tile -->






            </div>
            <!-- /col 8 -->





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
    $(function(){
        $("#navigation").children("ul").children("li").eq(1).addClass("active open");
        $("#navigation").children("ul").children("li").eq(1).children("ul").children("li").eq(0).addClass("active");

      // Initialize flot chart
      var d1 =[ [1, 715],
            [2, 1985],
            [3, 2525],
            [4, 2254],
            [5, 2861],
            [6, 2621],
            [7, 2987],
            [8, 3136],
            [9, 3364],
            [10, 3851],
            [11, 2546],
            [12, 3541]
      ];
      var d2 =[ [1, 463],
                [2, 578],
                [3, 327],
                [4, 984],
                [5, 268],
                [6, 684],
                [7, 425],
                [8, 233],
                [9, 1354],
                [10, 1200],
                [11, 1260],
                [12, 1320]
      ];
      var d3 =[ [1, 1463],
                [2, 1578],
                [3, 1327],
                [4, 1984],
                [5, 1268],
                [6, 1684],
                [7, 1425],
                [8, 1233],
                [9, 1354],
                [10, 1200],
                [11, 1260],
                [12, 1320]
      ];
      var months = ["January", "February", "March", "April", "May", "Juny", "July", "August", "September", "October", "November", "December"];

      // flot chart generate
      var plot = $.plotAnimator($("#statistics-chart"), 
        [
          {
            label: 'All', 
            data: d1,    
            lines: {lineWidth:3}, 
            shadowSize:0,
            color: '#ffffff'
          },
          { label: "Girls",
            data: d2, 
            animator: {steps: 99, duration: 500, start:200, direction: "right"},   
            lines: {        
              fill: .15,
              lineWidth: 0
            },
            color:['red']
          },
          { label: "Boyss",
            data: d3, 
            animator: {steps: 99, duration: 500, start:200, direction: "right"},   
            lines: {        
              fill: .15,
              lineWidth: 0
            },
            color:['blue']
          },
          {
            label: 'All',
            data: d1, 
            points: { show: true, fill: true, radius:6,fillColor:"rgba(0,0,0,.5)",lineWidth:2 }, 
            color: '#fff',        
            shadowSize:0
          },
          { label: "Girls",
            data: d2, 
            points: { show: true, fill: true, radius:6,fillColor:"rgba(255,255,255,.2)",lineWidth:2 }, 
            color: '#fff',        
            shadowSize:0
          },
          { label: "Boys",
            data: d3, 
            points: { show: true, fill: true, radius:6,fillColor:"rgba(255,255,255,.2)",lineWidth:2 }, 
            color: '#fff',        
            shadowSize:0
          }
        ],{ 
        
        xaxis: {

          tickLength: 0,
          tickDecimals: 0,
          min:1,
          ticks: [[1,"JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"]],

          font :{
            lineHeight: 24,
            weight: "300",
            color: "#ffffff",
            size: 14
          }
        },
        
        yaxis: {
          ticks: 4,
          tickDecimals: 0,
          tickColor: "rgba(255,255,255,.3)",

          font :{
            lineHeight: 13,
            weight: "300",
            color: "#ffffff"
          }
        },
        
        grid: {
          borderWidth: {
            top: 0,
            right: 0,
            bottom: 1,
            left: 1
          },
          borderColor: 'rgba(255,255,255,.3)',
          margin:0,
          minBorderMargin:0,              
          labelMargin:20,
          hoverable: true,
          clickable: true,
          mouseActiveRadius:6
        },
        
        legend: { show: false}
      });


      // tooltips showing
      $("#statistics-chart").bind("plothover", function (event, pos, item) {
        if (item) {
          var x = item.datapoint[0],
              y = item.datapoint[1];

          $("#tooltip").html('<h1 style="color: #418bca">' + months[x - 1] + '</h1>' + '<strong>' + y + '</strong>' + ' ' + item.series.label)
            .css({top: item.pageY-30, left: item.pageX+5})
            .fadeIn(200);
        } else {
          $("#tooltip").hide();
        }
      });

      
      //tooltips options
      $("<div id='tooltip'></div>").css({
        position: "absolute",
        //display: "none",
        padding: "10px 20px",
        "background-color": "#ffffff",
        "z-index":"99999"
      }).appendTo("body");


      
    });


  </script>
</body>
</html>

