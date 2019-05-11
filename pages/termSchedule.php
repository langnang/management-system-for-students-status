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


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>课程管理</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.html">主页</a></li>
                                <li class="active">课程管理</li>
                                <li class="active">学期课程</li>
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
                                        <h1><strong>学期课程</strong> 
                                        </h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body color transparent-white rounded-corners" id="termSchedule">


                                        <div class="table-responsive">



                                            <table  class="table table-datatable table-custom text-center">
                                                <thead>
                                                    <tr class="">
                                                        <th class="sort-alpha text-center">课程号</th>
                                                        <th class="sort-alpha text-center">课程名</th>
                                                        <th class="sort-alpha text-center">学时</th>
                                                        <th class="sort-alpha text-center">学分</th>
                                                        <th class="sort-alpha text-center">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX" v-for="(s,index) in schedule">
                                                        <td>{{s.id}}</td>
                                                        <td>{{s.course}}</td>
                                                        <td>{{s.hours}}</td>
                                                        <td>{{s.credits}}</td>
                                                        <td v-on:click="nochoose(index)">退选</td>
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
                $("#navigation").children("ul").children("li").eq(2).addClass("active open");
                 $("#navigation").children("ul").children("li").eq(2).children("ul").children("li").eq(1).addClass("active");

                console.log(id);
                console.log(mark);
                var sch_vue = new Vue({
                    el: "#termSchedule",
                    data: {
                        schedule: [],
                        page:[],
                        length:""
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            $.ajax({
                                url:"../action/schedule_select.php",
                                data:{id:id,mark:mark},
                                type:"post",
                                dataType:"json",
                                success:function(msg){
                                    console.log(msg);
                                    console.log(msg.length);
                                    var str = '';
                                    var json;
                                    for(var i=0;i<=msg.length-1;i++){
                                        console.log(msg[i].id_course);
                                        $.ajax({
                                            url:"../action/elective_selectByIM.php",
                                            data:{id:msg[i].id_course,mark:mark},
                                            type:"post",
                                            success:function(msg){
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                sch_vue.schedule = JSON.parse(json);
                                            }
                                                
                                        })
                                    }
                                }
                            })
                        });
                    },
                    methods:{
                        nochoose:function(index){
                            console.log(this.schedule[index].id);
                            console.log(id);
                            console.log(mark);
                            $.ajax({
                                url:"../action/schedule_delete.php",
                                data:{id_student:id,mark:mark,id_course:this.schedule[index].id},
                                type:"post",
                                success:function(msg){
                                    console.log(msg);
                                    if(msg==="1"){
                                        alert("退选成功");
                                    }else{
                                        alert("退选失败");
                                    }
                                }
                            })
                        }
                    }
                })

            });

        </script>
    </body>
</html>

