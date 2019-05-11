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
                                <li>注册操作</li>
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
                                        <h1><strong >本学期注册</strong> 信息表
                                        </h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body color transparent-white rounded-corners" >


                                        <div class="panel-group accordion" id="registerState">
                                            <div class="panel panel-dutch" v-for="(e,index) in ent">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title row">
                                                        <a data-toggle="collapse" v-bind:href="conversion(e.entrance)" v-on:click="showCollege(index)">
                                                            <div class="col-sm-4"><strong>{{e.entrance}}</strong> </div>
                                                            <div class="col-sm-4"><strong>未注册人数/总人数</strong> {{e.stuCount_un}}/{{e.stuCount}}</div>
                                                            <div class="col-sm-4"><strong>百分比</strong> {{e.stuCount_un / e.stuCount *100}}%</div>
                                                        </a>
                                                    </h4>

                                                </div>
                                                <div v-bind:id="e.entrance" class="panel-collapse collapse panel-cyan">
                                                    <div class="panel-body">
                                                        <div class="panel panel-dutch" v-for="(c,ind) in col">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title row">
                                                                    <a data-toggle="collapse" v-bind:href="conversion(c.college)" v-on:click="showMajor(index,ind)">
                                                                        <div class="col-sm-4"><strong>{{c.college}}</strong> </div>
                                                                        <div class="col-sm-4"><strong>未注册人数/总人数</strong> {{c.stuCount_un}}/{{c.stuCount}}</div>
                                                                        <div class="col-sm-4"><strong>百分比</strong> {{c.stuCount_un / c.stuCount *100}}%</div>
                                                                    </a>
                                                                </h4>

                                                            </div>
                                                            <div v-bind:id="c.college" class="panel-collapse collapse">
                                                                <div class="panel-body" >
                                                                    <div class="panel panel-dutch" v-for="(m,i) in maj">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title row">
                                                                                <a data-toggle="collapse" v-bind:href="conversion(m.major)" v-on:click="showStudent(index,ind,i)">
                                                                                    <div class="col-sm-4"><strong>{{m.major}}</strong> </div>
                                                                                    <div class="col-sm-4"><strong>未注册人数/总人数</strong> {{m.stuCount_un}}/{{m.stuCount}}</div>
                                                                                    <div class="col-sm-4"><strong>百分比</strong> {{m.stuCount_un / m.stuCount *100}}%</div>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div v-bind:id="m.major" class="panel-collapse collapse">
                                                                            <div class="panel-body">
                                                                                <div class="tile-body nopadding color-greensea">
                                                                                    <section class="tile color greensea">


                                                                                        <!-- tile body -->
                                                                                        <div class="tile-body nopadding">

                                                                                            <div class="table-responsive">
                                                                                                <table class="table table-hover">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th class="text-center">学号</th>
                                                                                                            <th class="text-center">注册状态</th>
                                                                                                            <th class="actions text-center"><a href="#" v-on:click="registerAll(index,ind,i)">全部注册</a></th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr v-for="(s,is) in stu" v-if="s.state='未注册'">
                                                                                                            <td  class="text-center">{{s.id}}</td>
                                                                                                            <td  class="text-center">{{s.state}}</td>
                                                                                                            <td class="actions text-center">
                                                                                                                <a class="edit" href="#" v-on:click="register(index,ind,i,is)">注册</a>
                                                                                                                <i class="fa  color-white fa-spinner"></i>
                                                                                                            </td>
                                                                                                        </tr>

                                                                                                    </tbody>
                                                                                                </table>

                                                                                            </div>

                                                                                        </div>
                                                                                        <!-- /tile body -->




                                                                                    </section>



                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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


                var reg_vue = new Vue({
                    el: "#registerState",
                    data: {
                        set: [],
                        ent: [],
                        col: [],
                        maj: [],
                        stu: []
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            $.ajax({
                                url: "../action/setup_selectbyname.php",
                                async: "false",
                                data: {name: "学期注册"},
                                type: "post",
                                dataType: "json",
                                success: function (msg) {
                                    reg_vue.set = msg[0];
                                }
                            });
                        });
                    },
                    watch: {
                        set: function () {
                            $.ajax({
                                url: "../action/entrance_select.php",
                                async: true,
                                dataType: 'json',
                                success: function (msg) {
                                    var str = '';
                                    var json;
                                    for (var i = 0; i <= msg.length - 1; i++) {
//                                        console.log(msg[i]);
                                        $.ajax({
                                            url: "../action/student_countByEntrance.php",
                                            async: true,
                                            data: {entrance: msg[i]},
                                            type: "post",
                                            success: function (msg) {
//                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                reg_vue.ent = JSON.parse(json);
                                            }
                                        });
                                    }
                                }
                            });

                        }
                    },
                    updated: function () {
                        this.$nextTick(function () {

                        });
                    },
                    methods: {
                        conversion: function (str) {
                            return "#" + str;
                        },
                        showCollege: function (index) {
                            reg_vue.col = [];
//                            console.log(index);
                            for (var i = 0; i <= $("#registerState>div").length - 1; i++) {
                                $("#registerState>div").eq(i).children("div").eq(1).css({display: 'none'});
                                $("#registerState>div").eq(i).children("div").eq(1).removeClass("in");
                            }
                            var entrance = reg_vue.ent[index].entrance;
                            $.ajax({
                                url: "../action/colleges_select.php",
                                async: true,
                                dataType: 'json',
                                success: function (msg) {
                                    var str = '';
                                    var json;
                                    for (var i = 0; i <= msg.length - 1; i++) {
                                        $.ajax({
                                            url: "../action/student_countByEC.php",
                                            async: true,
                                            data: {entrance: entrance, college: msg[i].college},
                                            type: "post",
                                            success: function (msg) {
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                reg_vue.col = JSON.parse(json);
                                            }
                                        });
                                    }
                                    $("#registerState>div").eq(index).children("div").eq(1).css({display: 'block'});
                                    for (var i = 0; i <= $("#registerState>div").eq(index).siblings().length - 1; i++) {
                                        $("#registerState>div").eq(index).siblings().eq(i).children("div").eq(1).css({display: 'none'});
                                        $("#registerState>div").eq(index).siblings().eq(i).children("div").eq(1).removeClass("in");
                                    }

                                }
                            });
                        },
                        showMajor: function (index, ind) {
                            reg_vue.maj = [];
                            console.log(index);
                            console.log(ind);
                            console.log(this.ent[index].entrance);
                            console.log(this.col[ind].college);
                            console.log($("#registerState>div").eq(index).children("div").eq(1).children("div").children("div").length);
                            for (var i = 0; i <= $("#registerState>div").eq(index).children("div").eq(1).children("div").children("div").length - 1; i++) {
                                $("#registerState>div").eq(index).children("div").eq(1).children("div").children("div").eq(i).children("div").eq(1).css({display: 'none'});
                                $("#registerState>div").eq(index).children("div").eq(1).children("div").children("div").eq(i).children("div").eq(1).removeClass("in");
                            }
                            var entrance = this.ent[index].entrance;
                            var college = this.col[ind].college;
                            $.ajax({
                                url: "../action/majors_select.php",
                                data: {college: college},
                                type: "post",
                                dataType: "json",
                                success: function (msg) {
                                    var str = '';
                                    var json;
                                    for (var i = 0; i <= msg.length - 1; i++) {
                                        $.ajax({
                                            url: "../action/student_countByECM.php",
                                            async: true,
                                            data: {entrance: entrance, college: college, major: msg[i].major},
                                            type: "post",
                                            success: function (msg) {
//                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                reg_vue.maj = JSON.parse(json);
                                                console.log(reg_vue.maj);
                                            }
                                        });
                                    }
                                    $("#registerState>div").eq(index).children("div").eq(1).children("div").children("div").eq(ind).children("div").eq(1).css({display: 'block'});
//                                    for (var i = 0; i <= $("#registerState>div").eq(index).siblings().length - 1; i++) {
//                                        $("#registerState>div").eq(index).siblings().eq(i).children("div").eq(1).css({display: 'none'});
//                                        $("#registerState>div").eq(index).siblings().eq(i).children("div").eq(1).removeClass("in");
//                                    }
                                }
                            });
                        },
                        showStudent: function (index, ind, i) {
                            reg_vue.stu = [];
                            console.log(index);
                            console.log(ind);
                            console.log(i);
                            var entrance = this.ent[index].entrance;
                            var college = this.col[ind].college;
                            var major = this.maj[i].major;
                            console.log(entrance);
                            console.log(college);
                            console.log(major);
                            $.ajax({
                                url: "../action/student_selectByECM.php",
                                data: {entrance: entrance, college: college, major: major},
                                type: "post",
                                dataType: "json",
                                success: function (ms) {
                                    var str = '';
                                    var json;
                                    for (var i = 0; i <= ms.length - 1; i++) {
//                                console.log(ms[i].id);
//                                arr.push(ms[i].id);
                                        $.ajax({
                                            url: "../action/register_selectByID.php",
                                            data: {id: ms[i].id},
                                            type: "post",
                                            success: function (msg) {
//                                                console.log(msg);
                                                str += msg;
                                                json = str.replace(/\]\[/g, ",");
                                                reg_vue.stu = JSON.parse(json);
//                                                console.log(reg_vue.stu);
                                            }
                                        });
                                    }
                                    ;

                                }
                            });
                        },
                        register: function (index, ind, i, is) {
                            var id = this.stu[is].id;
                            console.log(id);
                            if (confirm("确定注册" + id + "学生么？")) {
                                $.ajax({
                                    url: "../action/register_updateByID.php",
                                    data: {id: id},
                                    type: "post",
                                    success: function (msg) {
                                        if (msg === '1') {
                                            alert(id + "注册成功");
                                        } else {
                                            alert(id + "注册失败");
                                        }
                                    }
                                });
                            }
                        },
                        registerAll: function (index, ind, i) {
                            var entrance = this.ent[index].entrance;
                            var college = this.col[ind].college;
                            var major = this.maj[i].major;
                            console.log(entrance);
                            console.log(college);
                            console.log(major);
                            if (confirm("确定全部注册" + entrance + "届-" + college + "-" + major + "专业学生么？")) {
                                $.ajax({
                                    url: "../action/register_updateAllByEMC.php",
                                    data: {entrance: entrance, college: college, major: major},
                                    type: "post",
                                    dataType:"json",
                                    success: function (msg) {
                                        console.log(msg);
                                        for (var i = 0; i <= msg.length; i++) {
                                            $.ajax({
                                                url: "../action/register_updateByID.php",
                                                data: {id:msg[i].id},
                                                type: "post",
                                                success: function (ms) {
                                                   console.log(ms);
                                                }
                                            });
                                        }
                                    }
                                })
                            }
                        }

//                        ,
//                        showMajor: function (college, index) {
//                            console.log(index);
//                            for (var i = 0; i <= $("#registerState>div").length - 1; i++) {
//                                $("#registerState>div").eq(i).children("div").eq(1).css({display: 'none'});
//                                $("#registerState>div").eq(i).children("div").eq(1).removeClass("in");
//                            }
//                            $.ajax({
//                                url: "../action/majors_select.php",
//                                data: {college: college},
//                                type: "post",
//                                async: true,
//                                dataType: 'json',
//                                success: function (ms) {
//                                    reg_vue.maj = ms;
//                                    $("#registerState>div").eq(index).children("div").eq(1).css({display: 'block'});
//                                    for (var i = 0; i <= $("#registerState>div").eq(index).siblings().length - 1; i++) {
//                                        $("#registerState>div").eq(index).siblings().eq(i).children("div").eq(1).css({display: 'none'});
//                                        $("#registerState>div").eq(index).siblings().eq(i).children("div").eq(1).removeClass("in");
//                                    }
//                                    console.log(ms);
//                                }
//                            });
//                        }
                    }
                });

            });

        </script>
    </body>
</html>

