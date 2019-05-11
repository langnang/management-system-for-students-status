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
                                <li>学期选课</li>
                            </ol>
                        </div>


                    </div>
                    <!-- /page header -->



                    <!-- content main container -->
                    <div class="main">


                        <!-- row -->
                        <div class="row">


                            <!-- col 12 -->
                            <div class="col-md-12" >
                                <!-- tile -->
                                <section class="tile transparent">


                                    <div class="jumbotron bg-transparent-black-5" id="registerState">

                                        <div class="container text-center" >
                                            <h1>学期选课汇总</h1>
                                            <p></p>
                                            <p></p>
                                            <p><button type="button" class="btn btn-primary btn-lg margin-bottom-20" v-on:click="startRegister()"> {{set.state}}</button></p>

                                        </div>
                                        <form class="form-horizontal" role="form" style="display: none;">
                                            <div class="form-group col-sm-4">
                                                <label for="endTime" class="col-sm-4 control-label">学期标志</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="endTime" v-bind:value="set.mark" disabled="">
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="startTime" class="col-sm-4 control-label">开始时间</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="startTime" v-bind:value="set.startTime" disabled="">
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="endTime" class="col-sm-4 control-label">结束时间</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="endTime" v-bind:value="set.endTime" disabled="">
                                                </div>
                                            </div>
                                            
                                        </form>

                                        <form class="form-horizontal" role="form" style="display: none;">
                                            <div class="form-group col-sm-6">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <input type="text" class="form-control" id="startdatepicker" placeholder="开始时间">
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <div class="col-sm-8 col-sm-offset-4">
                                                    <input type="text" class="form-control" id="enddatepicker" placeholder="结束时间">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="text" class="form-control" placeholder="学期标志">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="button" class="btn btn-greensea col-sm-3 col-md-offset-3" v-on:click="submitRegister()">Submit</button>
                                                    <button type="reset" class="btn btn-red col-sm-3 ">Reset</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>



                                </section>
                                <!-- /tile -->



                                <!-- tile -->
                                <section class="tile color transparent-black">


                                    <!-- tile header -->
                                    <div class="tile-header transparent">
                                        <h1><strong>学期选课</strong> 导入
                                        </h1>
                                        <div class="controls">
                                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body" id="studentImport">


                                        <form class="form-horizontal" role="form">

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">选择Execl文件</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <span class="btn btn-primary btn-file">
                                                                <i class="fa fa-upload"></i>
                                                                <input type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" multiple="" onchange="importf(this)">
                                                            </span>
                                                        </span>
                                                        <input type="text" class="form-control" readonly="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">学生信息表</label>
                                                <div class="col-sm-10">
                                                    <div class="radio radio-transparent radio-inline"v-for="(s,index) in sheet">
                                                        <input type="radio" name="optionsRadios" v-bind:id="index" v-bind:value="s" v-on:change="readSheet(index)">
                                                        <label v-bind:for="index">{{s}}</label>
                                                    </div>

                                                </div>
                                            </div>



                                        </form>

                                        <div class="table-responsive">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-offset-5 col-sm-2">
                                                        <button type="button" class="btn btn-orange col-md-12" v-on:click="addSheet()">全部导入</button>
                                                    </div>
                                                    <div class="col-sm-offset-2 col-sm-3" style="padding:0;">
                                                        <!--<input type="text" id="search" style="width: 100%;font-size:17px;float:right;border: 0;background: none;color: rgba(255, 255, 255, 0.6);border-bottom: 1px solid rgba(255, 255, 255, 0.15);padding:6px 0px !important;" placeholder="搜索">-->
                                                    </div>
                                                </div>
                                            </div>


                                            <table  class="table table-datatable table-custom text-center">
                                                <thead>
                                                    <tr class="">
                                                        <th class="sort-alpha text-center">课程号</th>
                                                        <th class="sort-alpha text-center">课程名</th>
                                                        <th class="sort-alpha text-center">学期标志</th>
                                                        <th class="sort-alpha text-center">学时</th>
                                                        <th class="sort-alpha text-center">学分</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX" v-for="(i,index) in info">
                                                        <td>{{i.课程号}}</td>
                                                        <td>{{i.课程名}}</td>
                                                        <td>{{i.学期标志}}</td>
                                                        <td>{{i.学时}}</td>
                                                        <td>{{i.学分}}</td>
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
                $("#navigation").children("ul").children("li").eq(2).children("ul").children("li").eq(3).addClass("active");


                var reg_vue = new Vue({
                    el: "#registerState",
                    data: {
                        set: []
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            $.ajax({
                                url: "../action/setup_selectbyname.php",
                                async: "false",
                                data: {name: "学期选课"},
                                type: "post",
                                dataType: "json",
                                success: function (msg) {
                                    reg_vue.set = msg[0];
//                                    console.log("reg-mounted");
//                                    console.log(reg_vue.setup);
//                                    console.log(reg_vue.state);
//                                    console.log($("#registerState button").length);

                                }
                            });
                        });
                    },
                    updated: function () {
                        this.$nextTick(function () {
//                            console.log("reg-updated");
//                            console.log($("#registerState button").length);
                            if (reg_vue.set.state === "关闭") {
//                                        $("#registerState button").attr("disabled", "");
                                $("#registerState button").eq(0).text("开启学期选课");
                            } else {
                                $("#registerState button").eq(0).text("学期选课运行中");
                                $("#registerState button").eq(0).attr("disabled", "");
                                $("#registerState form").eq(0).css({display: "block"});
                            }
                        });
                    },
                    methods: {
                        startRegister: function () {
                            if (confirm("确定开启学期选课么")) {
//                                console.log(123);
//                                console.log($("#registerState form").length);
                                $("#registerState button").eq(0).attr("disabled", "");
                                $("#registerState form").eq(1).css({display: "block"});
//                                console.log($("#registerState form:last button").length);
                                $("#registerState form:last input").eq(1).attr("disabled", "");
                                $("#registerState form:last button").eq(0).attr("disabled", "");



                                $('#startdatepicker').datetimepicker({
                                    icons: {
                                        time: "fa fa-clock-o",
                                        date: "fa fa-calendar",
                                        up: "fa fa-arrow-up",
                                        down: "fa fa-arrow-down"
                                    }
                                });
                                $('#enddatepicker').datetimepicker({
                                    icons: {
                                        time: "fa fa-clock-o",
                                        date: "fa fa-calendar",
                                        up: "fa fa-arrow-up",
                                        down: "fa fa-arrow-down"
                                    }
                                });
                                var top_new;
                                $("#startdatepicker").on("dp.show", function (e) {
                                    var starttop = $('.bootstrap-datetimepicker-widget').position().top - 45;
                                    $('.bootstrap-datetimepicker-widget').css('top', starttop + 'px');
                                    top_new = starttop;
                                    $("#registerState form:last input").eq(1).removeAttr("disabled");

//                                    console.log(top);

                                });


                                $("#enddatepicker").on("dp.show", function (e) {
                                    $('.bootstrap-datetimepicker-widget').css('top', top_new + 'px');
                                    $("#registerState form:last button").eq(0).removeAttr("disabled");
                                });




                            }
                        },
                        submitRegister: function () {
                            if (confirm("确定开启学期选课？")) {
                                formatDate = function (str) {
                                    var date = str.split(" ")[0].split("/");
                                    var time = str.split(" ")[1].split(":");
                                    time.push("00");
                                    if (str.split(" ")[2] === "PM") {
                                        var hou = new Number(time[0]);
                                        time[0] = hou + 12;
                                    }
                                    var year = date.pop();
                                    date.unshift(year);
                                    return date.join("-") + " " + time.join("-");
                                };
                                var start = $("#registerState form:last input").eq(0).val();
                                var end = $("#registerState form:last input").eq(1).val();
                                var mark = $("#registerState form:last input").eq(2).val();
                                $.ajax({
                                    url: "../action/setup_updatebyname.php",
                                    type: "post",
                                    data: {name: "学期选课", state: "运行",mark:mark, startTime: formatDate(start), endTime: formatDate(end)},
                                    success: function (msg) {
                                        console.log(msg);
                                        if (msg === "1") {
                                            
//                                            $.ajax({
//                                                url: "../action/register_update.php",
//                                                type: "post",
//                                                data: {mark: mark,state:"未注册",mark_old:'',state_old:'未注册'},
//                                                success: function (msg) {
////                                                    console.log(msg);
//                                                }
//                                            });
                                        } else {
                                            alert("学期选课开启失败");
                                        }
                                    }
                                });
//                                
                            }

                        }
                    }

                });
                
                var stu_vue = new Vue({
                    el: "#studentImport",
                    data: {
                        execl:[],
                        sheet: [],
                        json:[],
                        info:[],
                        page: {min:0,max:0},
                        length: "0",
                        srh: ""
                    },
                    mounted: function () {
                        this.$nextTick(function () {
//                            console.log(123);
                        });
                    },
                    updated: function () {
                        this.$nextTick(function () {
//                            console.log(123);
                            $("#studentImport #search").on("input", function () {
                                stu_vue.srh = this.value;
                            });
                        });
                    },
                    methods:{
                        readSheet:function(index){
                           this.info=this.json[index];
//                           console.log(this.info);
                           this.length=this.info.length;
                           this.page.min=1;
                           this.page.max=this.length;
                            
                        },
                        search:function(arr){
//                            if (arr.id.indexOf(stu_vue.srh) > -1 || arr.college.indexOf(stu_vue.srh) > -1) {
//                                return true;
//                            } else {
//                                return false;
//                            }
                        },
                        addSheet:function(){
                            if(confirm("确定全部导入么？")){
                                for(var i=0;i<=this.info.length-1;i++){
                                    $.ajax({
                                        url:"../action/elective_insert.php",
                                        type:"post",
                                        data:this.info[i],
                                        success:function(msg){
                                            console.log(msg);
                                        }
                                        
                                    });
                                        
                                }
                            }
                        }
                    }
                });


                var wb;//读取完成的数据
                var rABS = false; //是否将文件读取为二进制字符串



                importf = function (obj) {//导入
                    if (!obj.files) {
                        return;
                    }
                    var f = obj.files[0];
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var data = e.target.result;
                        if (rABS) {
                            wb = XLSX.read(btoa(fixdata(data)), {//手动转化
                                type: 'base64'
                            });
                        } else {
                            wb = XLSX.read(data, {
                                type: 'binary'
                            });
                        }
                        //wb.SheetNames[0]是获取Sheets中第一个Sheet的名字
                        //wb.Sheets[Sheet名]获取第一个Sheet的数据
//                        document.getElementById("demo").innerHTML = JSON.stringify(XLSX.utils.sheet_to_json(wb.Sheets[wb.SheetNames[0]]));
//                        console.log(wb.SheetNames.length);
                        var sheet = [];
                        var json=[];
                        for (var i = 0; i <= wb.SheetNames.length - 1; i++) {
                            sheet.push(wb.SheetNames[i]);
                            json.push(JSON.parse(JSON.stringify(XLSX.utils.sheet_to_json(wb.Sheets[wb.SheetNames[i]]))));
                        }
                        stu_vue.sheet = sheet;
                        stu_vue.json=json;


                    };
                    if (rABS) {
                        reader.readAsArrayBuffer(f);
                    } else {
                        reader.readAsBinaryString(f);
                    }
                };


                function fixdata(data) { //文件流转BinaryString
                    var o = "",
                            l = 0,
                            w = 10240;
                    for (; l < data.byteLength / w; ++l)
                        o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w, l * w + w)));
                    o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w)));
                    return o;
                }




                $(document).on('change', '.btn-file :file', function () {
                    var input = $(this),
                            numFiles = input.get(0).files ? input.get(0).files.length : 1,
                            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                    input.trigger('fileselect', [numFiles, label]);
                });
                $('.btn-file :file').on('fileselect', function (event, numFiles, label) {

                    var input = $(this).parents('.input-group').find(':text'),
                            log = numFiles > 1 ? numFiles + ' files selected' : label;


                    if (input.length) {
                        input.val(log);
                    } else {
                        if (log)
                            alert(log);
                    }

                });

            });

        </script>
    </body>
</html>

