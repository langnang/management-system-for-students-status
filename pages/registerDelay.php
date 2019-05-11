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


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>学期注册管理</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.php">主页</a></li>
                                <li><a href="registerSummary.php">学期注册</a></li>
                                <li>特殊注册</li>
                            </ol>
                        </div>


                    </div>
                    <!-- /page header -->



                    <!-- content main container -->
                    <div class="main">


                        <!-- row -->
                        <div class="row">



                            <!-- tile -->
                            <section class="tile color transparent-black">

                                <!-- tile header -->
                                <div class="tile-header">
                                    <h1><strong>特殊注册</strong> 审核</h1>
                                    <div class="controls">
                                        <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                        <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->

                                <div class="tile-body" id="selectData">


                                    <form class="form-horizontal" role="form" >

                                        <!-- col 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="chosen-select chosen-transparent form-control" id="entrance" >
                                                        <option>入学时间</option>
                                                        <option v-for="e in entrance" v-bind:value="e">{{e}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /col 4 -->

                                        <!-- col 4 -->
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="chosen-select chosen-transparent form-control" id="college">
                                                        <option>学院</option>
                                                        <option v-for="c in college">{{c.college}}</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /col 4 -->

                                        <!-- col 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="chosen-select chosen-transparent form-control" id="major">
                                                        <option>专业</option>
                                                        <option v-for="m in major">{{m.major}}</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /col 4 -->

                                    </form>


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-offset-5 col-sm-2">
                                                <!--<button type="button" class="btn btn-orange col-md-12" v-on:click="addRow()" disabled="">添加</button>-->
                                            </div>
                                            <div class="col-sm-offset-2 col-sm-3" style="padding:0;">
                                                <input type="text" id="search" style="width: 100%;font-size:17px;float:right;border: 0;background: none;color: rgba(255, 255, 255, 0.6);border-bottom: 1px solid rgba(255, 255, 255, 0.15);padding:6px 0px !important;" placeholder="搜索">
                                            </div>
                                        </div>
                                    </div>


                                    <table  class="table table-datatable table-custom text-center">
                                        <thead>
                                            <tr class="">
                                                <th class="sort-alpha text-center">学号</th>
                                                <th class="sort-alpha text-center">注册状态</th>
                                                <th class="sort-alpha text-center">申请理由</th>
                                                <th class="sort-alpha text-center">审批结果</th>
                                                <th class="no-sort text-center">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="" v-for="(s,index) in student" v-if="show(index)">
                                                <td>{{s.id}}</td>
                                                <td>{{s.state}}</td>
                                                <td>{{s.reason}}</td>
                                                <td> 
                                                    <div class="radio radio-transparent radio-inline">
                                                        <input type="radio" v-bind:name="s.id" v-bind:id="'0'+s.id" value="未通过" checked="">
                                                        <label v-bind:for="'0'+s.id">未通过</label>
                                                        <input type="radio" v-bind:name="s.id" v-bind:id="'1'+s.id" value="通过">
                                                        <label v-bind:for="'1'+s.id">通过</label>
                                                    </div>
                                                </td>
                                                <td class="actions text-center">
                                                    <a class="edit" href="#" v-on:click="edit(index)">审核</a>
                                                    <i class="fa  color-white fa-spinner"></i>
                                                </td>
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

                            </section>


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
                $("#navigation").children("ul").children("li").eq(2).children("ul").children("li").eq(4).addClass("active");


                var select_vue = new Vue({
                    el: "#selectData",
                    data: {
                        entrance: [],
                        college: [],
                        major: [],
                        student: [],
                        page: {min: '', max: ""},
                        length: '',
                        srh: ""
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            $.ajax({
                                url: "../action/entrance_select.php",
                                dataType: "json",
                                success: function (msg) {
//                                    console.log(msg);
                                    select_vue.entrance = msg;
                                }
                            });
                        });
                    },
                    watch: {
                        entrance: function () {
                            $("#entrance").change(function () {
//                                console.log($("#entrance").val());
                                if ($("#entrance").val() === "入学时间") {
                                    select_vue.college = [];
                                    select_vue.major = [];
                                    select_vue.student = [];
                                } else {
                                    $.ajax({
                                        url: "../action/colleges_select.php",
                                        dataType: "json",
                                        success: function (msg) {
//                                            console.log(msg);
                                            select_vue.college = msg;
                                        }
                                    });
                                }
                            });
                        },
                        college: function () {
                            $("#college").change(function () {
                                console.log($("#college").val());
                                if ($("#college").val() === "学院") {
                                    select_vue.major = [];
                                    select_vue.student = [];
                                } else {
                                    $.ajax({
                                        url: "../action/majors_select.php",
                                        data: {college: $("#college").val()},
                                        type: "post",
                                        dataType: "json",
                                        success: function (msg) {
//                                            console.log(msg);
                                            select_vue.major = msg;
                                        }
                                    });
                                }
                            });
                        },
                        major: function () {
                            $("#major").change(function () {
//                                console.log($("#major").val());
                                if ($("#major").val() === "专业") {
                                    select_vue.student = [];
                                } else {
                                    $("#selectData #search").on("input", function () {
                                        select_vue.srh = this.value;
//                                        console.log(this.value);
                                    });
                                    refreshStudent();
                                }
                            });
                        }
                    },
                    methods: {
                        show: function (index) {
                            if (select_vue.student[index].state === '未注册' && select_vue.student[index].reason !== null && select_vue.student[index].result === null) {
                                return true;
                            } else {
                                return false;
                            }
                        },
//                        
                        edit: function (index) {
                            id=this.student[index].id;
                            console.log(id);
                            if(confirm("确定提交"+id+"学生的审核信息么？")){
                                var result = $('input[name="'+id+'"]:checked ').val();
                                $.ajax({
                                    url:"../action/register_updateResult.php",
                                    data:{id:id,result:result},
                                    type:"post",
                                    success:function(msg){
                                        console.log(msg);
                                    }
                                })
                            }
                        }
                    }

                });


                refreshStudent = function () {

//                            
                    $.ajax({
                        url: "../action/student_selectByECM.php",
                        data: {entrance: $("#entrance").val(), college: $("#college").val(), major: $("#major").val()},
                        type: "post",
                        dataType: "json",
                        success: function (ms) {
                            var str = '';
                            var json;
                            for (var i = 0; i <= ms.length - 1; i++) {
                                $.ajax({
                                    url: "../action/register_selectByID.php",
                                    data: {id: ms[i].id},
                                    type: "post",
                                    success: function (msg) {
//                                        console.log(msg);
                                        str += msg;
                                        json = str.replace(/\]\[/g, ",");
                                        select_vue.student = JSON.parse(json);
//                                                console.log(reg_vue.stu);
                                        select_vue.length = select_vue.student.length;
                                        select_vue.page.min = 1;
                                        select_vue.page.max = select_vue.student.length;
                                    }
                                });
                            }
                            ;

                        }
                    });
                };
            });

        </script>
    </body>
</html>

