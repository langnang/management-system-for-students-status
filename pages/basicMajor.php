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


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>基本信息设置</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.php">主页</a></li>
                                <li><a href="basicSummary.php">基本信息</a></li>
                                <li class="active">专业信息</li>
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
                                        <h1><strong>专业</strong> 信息表</h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body color transparent-black rounded-corners">

                                        <form class="form-horizontal" role="form" id="basicCollege">

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select class="chosen-select chosen-transparent form-control">
                                                        <option value="学院">学院</option>;
                                                        <option v-for="c in col" :value="c.college">{{c.college}}</option>;
                                                    </select>
                                                </div>
                                            </div>


                                        </form>

                                        <div class="table-responsive" id="basicMajor">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-offset-5 col-sm-2">
                                                        <button type="button" class="btn btn-orange col-md-12" v-on:click="addRow()">添加</button>
                                                    </div>
                                                    <div class="col-sm-offset-2 col-sm-3" style="padding:0;">
                                                        <input type="text" id="search" style="width: 100%;font-size:17px;float:right;border: 0;background: none;color: rgba(255, 255, 255, 0.6);border-bottom: 1px solid rgba(255, 255, 255, 0.15);padding:6px 0px !important;" placeholder="搜索">
                                                    </div>
                                                </div>
                                            </div>


                                            <table  class="table table-datatable table-custom text-center">
                                                <thead>
                                                    <tr class="">
                                                        <th class="sort-alpha text-center">专业代号</th>
                                                        <th class="sort-alpha text-center">专业名</th>
                                                        <th class="no-sort text-center">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX" style="display:none;">
                                                        <td><input type="text"/></td>
                                                        <td><input type="text"/></td>
                                                        <td class="actions text-center"><a class="edit" href="#" v-on:click="saveRow()">保存</a><a class="delete" href="#" v-on:click="deleteRow()">删除</a><i class="fa color-white fa-pencil"></i></td>
                                                    </tr>
                                                    <tr class="odd gradeX" v-for="(m,index) in maj" v-if="search(m)">
                                                        <td>{{m.id}}</td>
                                                        <td>{{m.major}}</td>
                                                        <td class="actions text-center">
                                                            <a class="edit" href="#" v-on:click="edit(index)">编辑</a>
                                                            <a class="delete" href="#" v-on:click="del(index)">删除</a>
                                                            <i class="fa  color-white fa-check"></i>
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
                $("#navigation").children("ul").children("li").eq(6).addClass("active open");
                $("#navigation").children("ul").children("li").eq(6).children("ul").children("li").eq(2).addClass("active");


                var col_vue = new Vue({
                    el: '#basicCollege',
                    data: {
                        col: []
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            $("#basicMajor>.row").css({display: "none"});
                            refreshCollege();
                        });
                    },
                    updated: function () {
                        this.$nextTick(function () {
                            $("#basicCollege select").change(function () {
                                if ($("#basicCollege select").val() !== "学院") {
                                    $("#basicMajor>.row").css({display: "block"});
                                    refreshMajor();
                                } else {
                                    $("#basicMajor>.row").css({display: "none"});
                                    maj_vue.maj = [];
                                    $("#basicMajor>table>tbody>tr").eq(0).css({display: 'none'});
                                }
                            });
                        });
                    }
                });

                var maj_vue = new Vue({
                    el: "#basicMajor",
                    data: {
                        maj: [],
                        page: [],
                        length: "",
                        srh: ""
                    },
                    updated: function () {
                        this.$nextTick(function () {
                            $("#basicMajor #search").on("input", function () {
                                maj_vue.srh = this.value;
                            });
                            this.length = this.maj.length;
                            this.page.min = "1";
                            this.page.max = this.length;
                        });
                    },
                    methods: {
                        search: function (arr) {
                            if (arr.id.indexOf(maj_vue.srh) > -1 || arr.major.indexOf(maj_vue.srh) > -1) {
                                return true;
                            } else {
                                return false;
                            }
                        },
                        addRow: function () {
                            $("#basicMajor>table>tbody>tr").eq(0).find("input").val("");
                            $("#basicMajor>table>tbody>tr").eq(0).css({display: 'table-row'});
                        },
                        saveRow: function () {
                            var id = $("#basicMajor>table>tbody>tr").eq(0).find("input").eq(0).val();
                            var major = $("#basicMajor>table>tbody>tr").eq(0).find("input").eq(1).val();
                            if (id !== "" && major !== "") {
                                $("#basicMajor>table>tbody>tr").eq(0).find('i').removeClass("fa-pencil").addClass("fa-spin fa-spinner");
                                $.ajax({
                                    url: '../action/major_insert.php',
                                    data: {id: id, major: major, college: $("#basicCollege select").val()},
                                    type: "post",
                                    async: true,
                                    success: function (msg) {
                                        if (msg === "1") {
                                            $("#basicMajor>table>tbody>tr").eq(0).find('i').removeClass("fa-spin fa-spinner").addClass("fa-check");
                                            $.ajax({
                                                url: "../action/majors_select.php",
                                                data: {college: $("#basicCollege select").val()},
                                                type: "post",
                                                async: true,
                                                dataType: 'json',
                                                success: function (ms) {
                                                    maj_vue.maj = ms;
                                                    $("#basicMajor>table>tbody>tr").eq(0).css({display: 'none'});
                                                    $("#basicMajor>table>tbody>tr").eq(0).find("input").val("");
                                                    $("#basicMajor>table>tbody>tr").eq(0).find('i').removeClass("fa-check").addClass("fa-pencil");
                                                }
                                            });
                                        } else {
                                            alert("信息添加失败!");
                                        }
                                    }
                                });
                            } else {
                                alert("添加信息不可为空！");
                            }
                        },
                        deleteRow: function () {
                            $("#basicMajor>table>tbody>tr").eq(0).css({display: 'none'});
                            $("#basicMajor>table>tbody>tr").eq(0).find("input").val("");
                        },
                        edit: function (index) {
                            var text = $("#basicMajor tbody>tr").eq(index + 1).find("a.edit").text();
                            var id_old = this.maj[index].id;
                            var major_old = this.maj[index].major;
                            var id_new;
                            var major_new;
                            if (text === "编辑") {
                                $("#basicMajor tbody>tr").eq(index + 1).find("a.edit").text("保存");
                                $("#basicMajor tbody>tr").eq(index + 1).children().eq(0).html("<input type='text'value='" + id_old + "'/>");
                                $("#basicMajor tbody>tr").eq(index + 1).children().eq(1).html("<input type='text'value='" + major_old + "'/>");
                            } else {
                                if (confirm('确定要保存修改内容吗?')) {
                                    id_new = $("#basicMajor tbody>tr").eq(index + 1).find("input").eq(0).val();
                                    major_new = $("#basicMajor tbody>tr").eq(index + 1).find("input").eq(1).val();
                                    $("#basicMajor tbody>tr").eq(index + 1).children().eq(2).children().eq(2).removeClass("fa-check").addClass("fa-spin fa-spinner");
                                    $.ajax({
                                        url: '../action/major_update.php',
                                        data: {id: id_new, major: major_new, id_old: id_old, major_old: major_old, college: $("#basicCollege select").val()},
                                        type: "post",
                                        async: true,
                                        success: function (msg) {
                                            if (msg === "1") {
                                                $("#basicMajor tbody>tr").eq(index + 1).children().eq(2).children().eq(2).removeClass("fa-spin fa-spinner").addClass("fa-check");
                                                $("#basicMajor tbody>tr").eq(index + 1).children().eq(0).text(id_new);
                                                $("#basicMajor tbody>tr").eq(index + 1).children().eq(1).text(major_new);
                                                $("#basicMajor tbody>tr").eq(index + 1).children().eq(2).children().eq(0).text("编辑");
                                                refreshMajor();
                                            } else {
                                                alert("信息修改失败!");
                                            }
                                        }
                                    });
                                } else {
                                }
                            }
                        },
                        del: function (index) {
                            if (confirm('确定要删除该条信息吗?')) {
                                var id = this.maj[index].id;
                                var major = this.maj[index].major;
                                $("#basicMajor tbody>tr").eq(index + 1).children().eq(2).children().eq(2).removeClass("fa-check").addClass("fa-spin fa-spinner");
                                $.ajax({
                                    url: '../action/major_delete.php',
                                    data: {id: id, major: major, college: $("#basicCollege select").val()},
                                    type: "post",
                                    async: true,
                                    success: function (msg) {
                                        if (msg === "1") {
                                            $("#basicMajor tbody>tr").eq(index + 1).children().eq(2).children().eq(2).removeClass("fa-spin fa-spinner").addClass("fa-check");
                                            refreshMajor();
                                        } else {
                                            alert("信息删除失败!");
                                        }
                                    }
                                });
                            }
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
                        success: function (ms) {
                            maj_vue.maj = ms;
                        }
                    });
                };

            });

        </script>

    </body>
</html>

