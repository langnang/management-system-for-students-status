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


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>学生信息管理</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.php">主页</a></li>
                                <li><a href="studentSummary.php">学生信息</a></li>
                                <li class="active">信息查询</li>
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
                                    <h1><strong>学生信息</strong> 查询</h1>
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
                                                <button type="button" class="btn btn-orange col-md-12" v-on:click="addRow()" disabled="">添加</button>
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
                                                <th class="sort-alpha text-center">姓名</th>
                                                <th class="sort-alpha text-center">性别</th>
                                                <th class="sort-alpha text-center">年龄</th>
                                                <th class="sort-alpha text-center">身份证号</th>
                                                <th class="sort-alpha text-center">籍贯</th>
                                                <th class="sort-alpha text-center">入学时间</th>
                                                <th class="sort-alpha text-center">学院</th>
                                                <th class="sort-alpha text-center">专业</th>
                                                <th class="sort-alpha text-center">联系方式</th>
                                                <th class="no-sort text-center">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX" style="display:none;">
                                                <td><input type="text"/></td>
                                                <td><input type="text"/></td>
                                                <td><input type="text"/></td>
                                                <td><input type="text"/></td>
                                                <td><input type="text"/></td>
                                                <td><input type="text"/></td>
                                                <td><input type="text"/></td>
                                                <td><input type="text"/></td>
                                                <td><input type="text"/></td>
                                                <td><input type="text"/></td>
                                                <td class="actions text-center"><a class="edit" href="#" v-on:click="saveRow()">保存</a><a class="delete" href="#" v-on:click="deleteRow()">删除</a><i class="fa color-white fa-spinner"></i></td>
                                            </tr>
                                            <tr class="" v-for="(s,index) in student" v-if="search(s)">
                                                <td>{{s.id}}</td>
                                                <td>{{s.name}}</td>
                                                <td>{{s.sex}}</td>
                                                <td>{{s.age}}</td>
                                                <td>{{s.card}}</td>
                                                <td>{{s.house}}</td>
                                                <td>{{s.entrance}}</td>
                                                <td>{{s.college}}</td>
                                                <td>{{s.major}}</td>
                                                <td>{{s.contact}}</td>
                                                <td class="actions text-center">
                                                    <a class="edit" href="#" v-on:click="edit(index)">编辑</a>
                                                    <a class="delete" href="#" v-on:click="del(index)">删除</a>
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
                $("#navigation").children("ul").children("li").eq(1).addClass("active open");
                $("#navigation").children("ul").children("li").eq(1).children("ul").children("li").eq(1).addClass("active");


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
                                    console.log(msg);
                                    select_vue.entrance = msg;
                                }
                            });
                        });
                    },
                    watch: {
                        entrance: function () {
                            $("#entrance").change(function () {
                                console.log($("#entrance").val());
                                if ($("#entrance").val() === "入学时间") {
                                    select_vue.college = [];
                                    select_vue.major = [];
                                    select_vue.student = [];
                                } else {
                                    $.ajax({
                                        url: "../action/colleges_select.php",
                                        dataType: "json",
                                        success: function (msg) {
                                            console.log(msg);
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
                                            console.log(msg);
                                            select_vue.major = msg;
                                        }
                                    });
                                }
                            });
                        },
                        major: function () {
                            $("#major").change(function () {
                                console.log($("#major").val());
                                if ($("#major").val() === "专业") {
                                    select_vue.student = [];
                                } else {
                                    $("#selectData #search").on("input", function () {
                                        select_vue.srh = this.value;
                                        console.log(this.value);
                                    });
                                    refreshStudent();
                                }
                            });
                        }
                    },
                    methods: {
                        search: function (arr) {
                            if (arr.id.indexOf(select_vue.srh) > -1 || arr.name.indexOf(select_vue.srh) > -1 || arr.sex.indexOf(select_vue.srh) > -1 || arr.age.indexOf(select_vue.srh) > -1 || arr.card.indexOf(select_vue.srh) > -1 || arr.house.indexOf(select_vue.srh) > -1 || arr.entrance.indexOf(select_vue.srh) > -1 || arr.college.indexOf(select_vue.srh) > -1 || arr.major.indexOf(select_vue.srh) > -1 || arr.contact.indexOf(select_vue.srh) > -1) {
                                return true;
                            } else {
                                return false;
                            }
                        },
//                        addRow: function () {
//                            console.log($("#selectData>table").width());
//                            $("#selectData>table>tbody>tr").eq(0).find("input").val("");
//                            $("#selectData>table>tbody>tr").eq(0).find("input").css({width: $("#selectData>table").width() / 13});
//                            $("#selectData>table>tbody>tr").eq(0).css({display: 'table-row'});
//                        },
//                        saveRow: function () {
//                            var id = $("#selectData>table>tbody>tr").eq(0).find("input").eq(0).val();
//                            var name = $("#selectData>table>tbody>tr").eq(0).find("input").eq(1).val();
//                            var sex = $("#selectData>table>tbody>tr").eq(0).find("input").eq(2).val();
//                            var age = $("#selectData>table>tbody>tr").eq(0).find("input").eq(3).val();
//                            var card = $("#selectData>table>tbody>tr").eq(0).find("input").eq(4).val();
//                            var house = $("#selectData>table>tbody>tr").eq(0).find("input").eq(5).val();
//                            var entrance = $("#selectData>table>tbody>tr").eq(0).find("input").eq(6).val();
//                            var college = $("#selectData>table>tbody>tr").eq(0).find("input").eq(7).val();
//                            var major = $("#selectData>table>tbody>tr").eq(0).find("input").eq(8).val();
//                            var contact = $("#selectData>table>tbody>tr").eq(0).find("input").eq(9).val();
//
//                            if (id !== "" && name !== "" && sex !== "" && age !== "" && card !== "" && house !== "" && entrance !== "" && college !== "" && major !== "" && contact !== "") {
//                                $("#selectData>table>tbody>tr").eq(0).find('i').addClass("fa-spin");
//                                $.ajax({
//                                    url: '../action/student_insert.php',
//                                    data: {学号: id, 姓名: name, 性别: sex, 年龄: age, 身份证号: card, 籍贯: house, 入学时间: entrance, 学院: college, 专业: major, 联系方式: contact},
//                                    type: "post",
//                                    async: true,
//                                    success: function (msg) {
//                                        if (msg === "1") {
//                                            $("#selectData>table>tbody>tr").eq(0).find('i').removeClass("fa-spin fa-spinner").addClass("fa-check");
//                                            $.ajax({
//                                                url: "../action/student_selectByECM.php",
//                                                data: {entrance: $("#entrance").val(), college: $("#college").val(), major: $("#major").val()},
//                                                type: "post",
//                                                dataType: "json",
//                                                success: function (ms) {
//                                                    console.log(ms);
//                                                    select_vue.student = ms;
//                                                    select_vue.length = ms.length;
//                                                    select_vue.page.min = 1;
//                                                    select_vue.page.max = ms.length;
//
//                                                    $("#selectData>table>tbody>tr").eq(0).css({display: 'none'});
//                                                    $("#selectData>table>tbody>tr").eq(0).find("input").val("");
//                                                    $("#selectData>table>tbody>tr").eq(0).find('i').removeClass("fa-check").addClass("fa-spinner");
//                                                }
//                                            });
//
//
//                                        } else {
//                                            alert("信息添加失败!");
//                                        }
//                                    }
//                                });
//                            } else {
//                                alert("添加信息不可为空！");
//                            }
//                        },
//                        deleteRow: function () {
//                            $("#selectData>table>tbody>tr").eq(0).css({display: 'none'});
//                            $("#selectData>table>tbody>tr").eq(0).find("input").val("");
//                        }
                        edit: function (index) {
                            var text = $("#selectData tbody>tr").eq(index + 1).find("a.edit").text();
                            var id_old = this.student[index].id;
                            var name_old = this.student[index].name;
                            var sex_old = this.student[index].sex;
                            var age_old = this.student[index].age;
                            var card_old = this.student[index].card;
                            var house_old = this.student[index].house;
                            var entrance_old = this.student[index].entrance;
                            var college_old = this.student[index].college;
                            var major_old = this.student[index].major;
                            var contact_old = this.student[index].contact;
                            var id_new, name_new, sex_new, age_new, card_new, house_new, entrance_new, college_new, major_new, contact_new;
                            if (text === "编辑") {
                                $("#selectData tbody>tr").eq(index + 1).find("a.edit").text("保存");
                                $("#selectData tbody>tr").eq(index + 1).children().eq(0).html("<input type='text'value='" + id_old + "'/>");
                                $("#selectData tbody>tr").eq(index + 1).children().eq(1).html("<input type='text'value='" + name_old + "'/>");
                                $("#selectData tbody>tr").eq(index + 1).children().eq(2).html("<input type='text'value='" + sex_old + "'/>");
                                $("#selectData tbody>tr").eq(index + 1).children().eq(3).html("<input type='text'value='" + age_old + "'/>");
                                $("#selectData tbody>tr").eq(index + 1).children().eq(4).html("<input type='text'value='" + card_old + "'/>");
                                $("#selectData tbody>tr").eq(index + 1).children().eq(5).html("<input type='text'value='" + house_old + "'/>");
                                $("#selectData tbody>tr").eq(index + 1).children().eq(6).html("<input type='text'value='" + entrance_old + "'/>");
                                $("#selectData tbody>tr").eq(index + 1).children().eq(7).html("<input type='text'value='" + college_old + "'/>");
                                $("#selectData tbody>tr").eq(index + 1).children().eq(8).html("<input type='text'value='" + major_old + "'/>");
                                $("#selectData tbody>tr").eq(index + 1).children().eq(9).html("<input type='text'value='" + contact_old + "'/>");
                                console.log($("#selectData tbody>tr").eq(index + 1).find("input").length);
                                $("#selectData>table>tbody>tr").eq(index + 1).find("input").css({width: "100%"});

//                                $("#selectData>table>tbody>tr").eq(index + 1).find("input").css({width: $("#selectData>table").width() / 30+"px"});
                                console.log($("#selectData tbody>tr").eq(index + 1).find("input:first").width());
                                console.log($("#selectData tbody>tr").eq(index + 1).find("input:last").width());
                            } else {
                                if (confirm('确定要保存修改内容吗?')) {
                                    id_new = $("#selectData tbody>tr").eq(index + 1).find("input").eq(0).val();
                                    name_new = $("#selectData tbody>tr").eq(index + 1).find("input").eq(1).val();
                                    sex_new = $("#selectData tbody>tr").eq(index + 1).find("input").eq(2).val();
                                    age_new = $("#selectData tbody>tr").eq(index + 1).find("input").eq(3).val();
                                    card_new = $("#selectData tbody>tr").eq(index + 1).find("input").eq(4).val();
                                    house_new = $("#selectData tbody>tr").eq(index + 1).find("input").eq(5).val();
                                    entrance_new = $("#selectData tbody>tr").eq(index + 1).find("input").eq(6).val();
                                    college_new = $("#selectData tbody>tr").eq(index + 1).find("input").eq(7).val();
                                    major_new = $("#selectData tbody>tr").eq(index + 1).find("input").eq(8).val();
                                    contact_new = $("#selectData tbody>tr").eq(index + 1).find("input").eq(9).val();
                                    $("#selectData tbody>tr").eq(index + 1).children().eq(10).children().eq(2).addClass("fa-spin");
                                    $.ajax({
                                        url: '../action/student_update.php',
                                        data: {
                                            id: id_new,
                                            name: name_new,
                                            sex: sex_new,
                                            age: age_new,
                                            card: card_new,
                                            house: house_new,
                                            entrance: entrance_new,
                                            college: college_new,
                                            major: major_new,
                                            contact: contact_new,
                                            id_old: id_old,
                                            name_old: name_old,
                                            sex_old: sex_old,
                                            age_old: age_old,
                                            card_old: card_old,
                                            house_old: house_old,
                                            entrance_old: entrance_old,
                                            college_old: college_old,
                                            major_old: major_old,
                                            contact_old: contact_old
                                        },
                                        type: "post",
                                        async: true,
                                        success: function (msg) {
                                            console.log(msg);
                                            if (msg === "1") {
                                                $("#selectData tbody>tr").eq(index + 1).children().eq(10).children().eq(2).removeClass("fa-spin fa-spinner").addClass("fa-check");
                                                $("#selectData tbody>tr").eq(index + 1).children().eq(10).children().eq(0).text("编辑");

                                                window.setTimeout(function () {
                                                    select_vue.student = [];
                                                    refreshStudent();
                                                }, 500);


                                            } else {
                                                $("#selectData tbody>tr").eq(index + 1).children().eq(10).children().eq(2).removeClass("fa-spin fa-spinner").addClass("fa-close");
                                                alert("信息修改失败!");
                                                window.setTimeout(function () {
                                                    select_vue.student = [];
                                                    refreshStudent();
                                                }, 500);
                                            }
                                        }
                                    });
                                } else {
                                }
                            }
                        },
                        del: function (index) {
                            if (confirm('确定要删除该条信息吗?')) {
                                var id_old = this.student[index].id;
                                var name_old = this.student[index].name;
                                var sex_old = this.student[index].sex;
                                var age_old = this.student[index].age;
                                var card_old = this.student[index].card;
                                var house_old = this.student[index].house;
                                var entrance_old = this.student[index].entrance;
                                var college_old = this.student[index].college;
                                var major_old = this.student[index].major;
                                var contact_old = this.student[index].contact;
                                $("#selectData tbody>tr").eq(index + 1).children().eq(10).children().eq(2).addClass("fa-spin");
                                $.ajax({
                                    url: '../action/student_delete.php',
                                    data: {
                                        id_old: id_old,
                                        name_old: name_old,
                                        sex_old: sex_old,
                                        age_old: age_old,
                                        card_old: card_old,
                                        house_old: house_old,
                                        entrance_old: entrance_old,
                                        college_old: college_old,
                                        major_old: major_old,
                                        contact_old: contact_old
                                    },
                                    type: "post",
                                    async: true,
                                    success: function (msg) {
                                        console.log(msg);
                                        if (msg === "1") {
                                            $("#selectData tbody>tr").eq(index + 1).children().eq(10).children().eq(2).removeClass("fa-spin fa-spinner").addClass("fa-check");
                                            window.setTimeout(function () {
                                                select_vue.student = [];
                                                refreshStudent();
                                            }, 500);
                                        } else {
                                            $("#selectData tbody>tr").eq(index + 1).children().eq(10).children().eq(2).removeClass("fa-spin fa-spinner").addClass("fa-close");
                                            alert("信息删除失败!");
                                            window.setTimeout(function () {
                                                select_vue.student = [];
                                                refreshStudent();
                                            }, 500);
                                        }
                                    }
                                });
                            }
                        }
                    }

                });


                refreshStudent = function () {
                    $.ajax({
                        url: "../action/student_selectByECM.php",
                        data: {entrance: $("#entrance").val(), college: $("#college").val(), major: $("#major").val()},
                        type: "post",
                        dataType: "json",
                        success: function (ms) {
                            select_vue.student = ms;
                            select_vue.length = ms.length;
                            select_vue.page.min = 1;
                            select_vue.page.max = ms.length;
                        }
                    });
                };
            });

        </script>
    </body>
</html>

