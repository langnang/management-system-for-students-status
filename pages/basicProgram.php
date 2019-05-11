<!DOCTYPE html>
<html>
    <head>
        <title>高校学籍管理系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8" />

        <?php
        include "parts/cssList.php";
        ?>
        <style>
            #basicProgram ul li:hover{
                background-color:white;
                color:black;
            }
        </style>
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


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>基本信息设置</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.php">主页</a></li>
                                <li><a href="basicSummary.php">基本信息</a></li>
                                <li class="active">培养方案</li>
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
                                    <div class="tile-header">
                                        <h1><strong>培养方案</strong> 设置</h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body color transparent-white rounded-corners">

                                        <form class="form-horizontal" role="form">


                                            <!-- col 6 -->
                                            <div class="col-md-6">

                                                <div class="form-group" id="basicCollege">
                                                    <div class="col-sm-12">
                                                        <select class="chosen-select chosen-transparent form-control">
                                                            <option value="学院">学院</option>
                                                            <option v-for="c in col" :value="c.college">{{c.college}}</option>;
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /col 6 -->

                                            <!-- col 6 -->
                                            <div class="col-md-6">

                                                <div class="form-group" id="basicMajor">
                                                    <div class="col-sm-12">
                                                        <select class="chosen-select chosen-transparent form-control">
                                                            <option value="专业">专业</option>
                                                            <option v-for="m in maj" :value="m.major">{{m.major}}</option>;
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /col 6 -->
                                        </form>

                                        <div class="table-responsive" id="basicProgram">
                                            <div class="row" style="display:none;">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-offset-5 col-sm-2">
                                                        <button type="button" class="btn btn-orange col-md-12" v-on:click="addRow()" >添加</button>
                                                    </div>
                                                    <div class="col-sm-offset-2 col-sm-3" style="padding:0;">
                                                        <input type="text" id="search" style="width: 100%;font-size:17px;float:right;border: 0;background: none;color: rgba(255, 255, 255, 0.6);border-bottom: 1px solid rgba(255, 255, 255, 0.15);padding:6px 0px !important;" placeholder="搜索" >
                                                    </div>
                                                </div>
                                            </div>

                                            <table  class="table table-datatable table-custom text-center">
                                                <thead>
                                                    <tr class="">
                                                        <th class="sort-alpha text-center">课程类别</th>
                                                        <th class="sort-alpha text-center">课程号</th>
                                                        <th class="sort-alpha text-center">课程名</th>
                                                        <th class="sort-alpha text-center">学分</th>
                                                        <th class="sort-alpha text-center">学时</th>
                                                        <th class="no-sort text-center">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="" style="display: none;">
                                                        <td><select class="chosen-select chosen-transparent form-control">
                                                                <option>通识教育基础课程</option>
                                                                <option>学科平台基础课程</option>
                                                                <option>专业课</option>
                                                                <option>实践性环节</option>
                                                            </select></td>
                                                        <td>
                                                            <input type="text" id="searchID" style="width: 100%;"/>
                                                            <ul style="list-style: none;text-align: left;background-color:rgba(0, 0, 0, 0.3);color: rgba(255, 255, 255, 0.8);font-size: 14px;padding: 6px 15px !important;position: absolute;z-index: 333;">
                                                                <li v-for="(s,index) in searchID" v-on:click="fillRowByID(index)">{{s.id}}</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <input type="text" id="searchCourse" style="width: 100%;"/>
                                                            <ul style="list-style: none;text-align: left;background-color:rgba(0, 0, 0, 0.3);color: rgba(255, 255, 255, 0.8);font-size: 14px;padding: 6px 15px !important;position: absolute;z-index: 333;">
                                                                <li v-for="s in searchCourse">{{s.course}}</li>
                                                            </ul>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="actions text-center"><a class="edit" href="#">保存</a><a class="delete" href="#">删除</a></td>
                                                    </tr>
                                                    <tr class="odd gradeX" v-for="(g,index) in general">
                                                        <td>通识教育基础课程</td>
                                                        <td>{{g.id}}</td>
                                                        <td>{{g.course}}</td>
                                                        <td>{{g.hours}}</td>
                                                        <td>{{g.credits}}</td>
                                                        <td class="actions text-center"><a class="edit" href="#">编辑</a><a class="delete" href="#">删除</a></td>
                                                    </tr>
                                                    <tr class="odd gradeX" v-for="(g,index) in subject">
                                                        <td>学科平台基础课程</td>
                                                        <td>{{g.id}}</td>
                                                        <td>{{g.course}}</td>
                                                        <td>{{g.hours}}</td>
                                                        <td>{{g.credits}}</td>
                                                        <td class="actions text-center"><a class="edit" href="#">编辑</a><a class="delete" href="#">删除</a></td>
                                                    </tr>
                                                    <tr class="odd gradeX" v-for="(g,index) in professional">
                                                        <td>专业课</td>
                                                        <td>{{g.id}}</td>
                                                        <td>{{g.course}}</td>
                                                        <td>{{g.hours}}</td>
                                                        <td>{{g.credits}}</td>
                                                        <td class="actions text-center"><a class="edit" href="#">编辑</a><a class="delete" href="#">删除</a></td>
                                                    </tr>
                                                    <tr class="odd gradeX" v-for="(g,index) in practical">
                                                        <td>实践性环节</td>
                                                        <td>{{g.id}}</td>
                                                        <td>{{g.course}}</td>
                                                        <td>{{g.hours}}</td>
                                                        <td>{{g.credits}}</td>
                                                        <td class="actions text-center"><a class="edit" href="#">编辑</a><a class="delete" href="#">删除</a></td>
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
                                <!--/tile-->
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
                $("#navigation").children("ul").children("li").eq(6).addClass("active open");
                $("#navigation").children("ul").children("li").eq(6).children("ul").children("li").eq(4).addClass("active");

                var col_vue = new Vue({
                    el: '#basicCollege',
                    data: {
                        col: []
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            refreshCollege();
                        });
                    },
                    updated: function () {
                        this.$nextTick(function () {
                            $('#basicCollege select').change(function () {
                                if ($('#basicCollege select').val() !== "学院") {
                                    refreshMajor();
                                } else {
                                    maj_vue.maj = [];
                                }
                            });
                        });
                    }
                });

                var maj_vue = new Vue({
                    el: '#basicMajor',
                    data: {
                        maj: []
                    },
                    updated: function () {
                        this.$nextTick(function () {
                            $('#basicMajor select').change(function () {
                                if ($('#basicMajor select').val() !== "专业") {
                                    refreshProgram();
                                    $("#basicProgram>div.row").css({display: "block"});

                                } else {
                                    pro_vue.pro = [];
                                    console.log("zhuanye");
                                }

                            });
                        });
                    }
                });



                var pro_vue = new Vue({
                    el: "#basicProgram",
                    data: {
                        pro: [],
                        general: [],
                        subject: [],
                        professional: [],
                        practical: [],
                        searchID: [],
                        searchCourse: [],
                        page: [],
                        length: "",
                        srh: ""
                    },
                    watch: {
                        pro: function () {
                            for (i = 0; i <= this.pro.length - 1; i++) {
                                if (this.pro[i].type === "通识教育基础课程") {
                                    var courseID = this.pro[i].program.split(",");
                                    console.log(courseID);
                                    var str = '';
                                    var json;
                                    for (var j = 0; j <= courseID.length - 1; j++) {
                                        $.ajax({
                                            url: "../action/course_selectByID.php",
                                            data: {id: courseID[j]},
                                            type: "post",
                                            success: function (msg) {
                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                pro_vue.subject = JSON.parse(json);
                                            }
                                        })
                                    }

                                }else if(this.pro[i].type === "学科平台基础课程"){
                                    var courseID = this.pro[i].program.split(",");
                                    console.log(courseID);
                                    var str = '';
                                    var json;
                                    for (var j = 0; j <= courseID.length - 1; j++) {
                                        $.ajax({
                                            url: "../action/course_selectByID.php",
                                            data: {id: courseID[j]},
                                            type: "post",
                                            success: function (msg) {
                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                pro_vue.general = JSON.parse(json);
                                            }
                                        })
                                    }
                                }else if(this.pro[i].type === "专业课"){
                                    var courseID = this.pro[i].program.split(",");
                                    console.log(courseID);
                                    var str = '';
                                    var json;
                                    for (var j = 0; j <= courseID.length - 1; j++) {
                                        $.ajax({
                                            url: "../action/course_selectByID.php",
                                            data: {id: courseID[j]},
                                            type: "post",
                                            success: function (msg) {
                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                pro_vue.professional = JSON.parse(json);
                                            }
                                        })
                                    }
                                }else if(this.pro[i].type === "实践性环节"){
                                    var courseID = this.pro[i].program.split(",");
                                    console.log(courseID);
                                    var str = '';
                                    var json;
                                    for (var j = 0; j <= courseID.length - 1; j++) {
                                        $.ajax({
                                            url: "../action/course_selectByID.php",
                                            data: {id: courseID[j]},
                                            type: "post",
                                            success: function (msg) {
                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                pro_vue.practical = JSON.parse(json);
                                            }
                                        })
                                    }
                                }
                            }
                        },
                        general: function () {

                        }
                    },
                    updated: function () {
                        this.$nextTick(function () {

                        });
                    },
                    methods: {
                        addRow: function () {
                            $("#basicProgram tbody tr:first").css({display: "table-row"});
                            $("#basicProgram tbody tr:first").children("td").eq(1).children("ul").css({width: $("#basicProgram tbody tr:first").children("td").eq(1).width()});
                            $("#basicProgram tbody tr:first").children("td").eq(2).children("ul").css({width: $("#basicProgram tbody tr:first").children("td").eq(2).width()});
                            $("#basicProgram #searchID").on("input", function () {
                                if (this.value !== "") {
                                    $.ajax({
                                        url: "../action/course_selectLikeID.php",
                                        type: "post",
                                        data: {id: this.value},
                                        dataType: "json",
                                        success: function (msg) {
                                            pro_vue.searchID = msg;
                                        }
                                    });
                                } else {
                                    pro_vue.searchID = [];
                                }

//                                console.log(this.value);
                            });
                            $("#basicProgram #searchCourse").on("input", function () {

                                if (this.value !== "") {
                                    $.ajax({
                                        url: "../action/course_selectLikeName.php",
                                        type: "post",
                                        data: {course: this.value},
                                        dataType: "json",
                                        success: function (msg) {
                                            pro_vue.searchCourse = msg;
                                        }
                                    })
                                } else {
                                    pro_vue.searchcourse = [];
                                }
                            });
                        },
                        fillRowByID:function(index){
                            console.log(index);
                        },
                        fillRowByCourse:function(index){
                            
                        }
                    }
                });


                refreshCollege = function () {
                    $.ajax({
                        url: "../action/colleges_select.php",
                        async: true,
                        dataType: 'json',
                        success: function (msg) {
                            col_vue.col = msg;
                        }
                    });
                };
                refreshMajor = function () {
                    $.ajax({
                        url: "../action/majors_select.php",
                        data: {college: $("#basicCollege select").val()},
                        type: "post",
                        async: true,
                        dataType: 'json',
                        success: function (msg) {
                            maj_vue.maj = msg;
                        }
                    });
                };
                refreshProgram = function () {
                    $.ajax({
                        url: "../action/programs_select.php",
                        data: {major: $("#basicMajor select").val()},
                        type: "post",
                        async: true,
                        dataType: 'json',
                        success: function (msg) {
                            pro_vue.pro = msg;
                        }
                    });
                };
            });

        </script>
    </body>
</html>

