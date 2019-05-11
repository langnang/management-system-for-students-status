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
                                <li><a href="graduationSummary.php">毕业汇总</a></li>
                                <li class="active">毕业预警</li>
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
                                <section class="tile transparent" id="graduationAudit">


                                    <!-- tile header -->
                                    <div class="tile-header transparent">
                                        <h1><strong>{{set.mark}}</strong> 学年毕业审核预警名单
                                        </h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body color transparent-white rounded-corners" >

                                        
                                       <div class="table-responsive" >

                                            <table  class="table table-datatable table-custom text-center">
                                                <thead>
                                                    <tr class="">
                                                        <th class="sort-alpha text-center">学号</th>
                                                        <th class="sort-alpha text-center">专业</th>
                                                        <th class="sort-alpha text-center">未完成课程数</th>
                                                        <th class="sort-alpha text-center">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX" v-for="(g,index) in gra" v-if="g.program!==0">
                                                        <td>{{g.id_student}}</td>
                                                        <td>{{g.major}}</td>
                                                        <td>{{g.program}}</td>
                                                        <td class="actions text-center">
                                                    <a class="edit" href="#" v-on:click="edit(index)">预警</a>
                                                    <i class="fa  color-white fa-spinner"></i>
                                                </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="row">
                                                <div class="col-md-4 sm-center">
                                                    <div class="" id="basicDataTable_info" style="padding: 5px 8px;">
                                                        Showing {{page.min}} to {{page.max}} of {{length}} entries
                                                    </div>
                                                </div>

                                                <div class="col-md-8 text-right sm-center">
                                                    <div class="dataTables_paginate  paging_custombootstrap" >
                                                        <ul class="pagination">
                                                            <li class="prev disabled"><a  href="#">Previous</a></li>
                                                            <li class="active"><a  href="#">1</a></li>
                                                            <li class="next disabled"><a href="#">Next</a></li>
                                                        </ul>
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
                $("#navigation").children("ul").children("li").eq(5).addClass("active open");
                $("#navigation").children("ul").children("li").eq(5).children("ul").children("li").eq(2).addClass("active");

                var gra_vue = new Vue({
                    el: "#graduationAudit",
                    data: {
                        set: [],
                        gra: [],
                        page: [],
                        length: ""
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
//                                    console.log(msg[0]);
                                    gra_vue.set = msg[0];
                                }
                            });
                        });
                    },
                    watch: {
                        set: function () {
                            var mark = this.set.mark;
                            $.ajax({
                                url: "../action/graview_selectByEntrance.php",
                                async: "false",
                                data: {entrance: mark},
                                type: "post",
                                dataType: "json",
                                success: function (msg) {
                                    var str = '';
                                    var json;
                                    for (var i = 0; i <= msg.length - 1; i++) {
                                        $.ajax({
                                            url: "../action/proview_selectByMajor.php",
                                            async: "true",
                                            data: {major: msg[i].major,id_student:msg[i].id_student,id_course:msg[i].id_course},
                                            type: "post",
//                                            dataType:"json",
                                            success: function (msg) {
//                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                gra_vue.gra = JSON.parse(json);

                                            }
                                        });
                                    }
//                                    gra_vue.set = msg[0];
                                }
                            });
                        }
                    }
                });

            });

        </script>
    </body>
</html>
