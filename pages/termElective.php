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
                                <li class="active">学期选课</li>
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
                                        <h1><strong>学期选课</strong> 
                                        </h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body color transparent-white rounded-corners" id="elective">

                                        <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-offset-4 col-sm-4" style="padding:0;">
                                                <input type="text" id="search" style="width: 100%;font-size:17px;float:right;border: 0;background: none;color: rgba(255, 255, 255, 0.6);border-bottom: 1px solid rgba(255, 255, 255, 0.15);padding:6px 0px !important;" placeholder="搜索">
                                            </div>
                                        </div>
                                    </div>

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
                                                    <tr class="odd gradeX" v-for="(e,index) in elective" v-if="search(e)">
                                                        <td>{{e.id}}</td>
                                                        <td>{{e.course}}</td>
                                                        <td>{{e.hours}}</td>
                                                        <td>{{e.credits}}</td>
                                                        <td v-on:click="choose(index)">选课</td>
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
                 $("#navigation").children("ul").children("li").eq(2).children("ul").children("li").eq(0).addClass("active");

                var ele_vue = new Vue({
                    el: "#elective",
                    data: {
                        elective: [],
                        page: [],
                        length: "",
                        srh:""
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            //此处填第一次渲染完成后执行的代码
                            $.ajax({
                                url:"../action/elective_select.php",
                                dataType:"json",
                                success:function(msg){
                                    ele_vue.elective=msg;
                                    $("#elective #search").on("input", function () {
                                        ele_vue.srh = this.value;
                                        console.log(this.value);
                                    });
                                }
                            })
                        });
                    },
                    methods:{
                        search: function (arr) {
                            if (arr.id.indexOf(ele_vue.srh) > -1 || arr.course.indexOf(ele_vue.srh) > -1 || arr.hours.indexOf(ele_vue.srh) > -1 || arr.credits.indexOf(ele_vue.srh) > -1) {
                                return true;
                            } else {
                                return false;
                            }
                        },
                        choose:function(index){
                            console.log(index);
                            console.log(this.elective[index].id);
                            console.log(this.elective[index].course);
                            console.log(this.elective[index].hours);
                            console.log(this.elective[index].credits);
                            $.ajax({
                                url:"../action/schedule_insert.php",
                                data:{id_student:id,mark:mark,id_course:this.elective[index].id},
                                type:"post",
                                success:function(msg){
                                    console.log(msg);
                                    if(msg==="1"){
                                        alert("选课成功");
                                    }else{
                                        alert("选课失败");
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

