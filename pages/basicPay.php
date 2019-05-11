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
                                <li class="active">缴费情况</li>
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
                                <section class="tile color transparent-white">

                                    <!-- tile header -->
                                    <div class="tile-header">
                                        <h1><strong>学生缴费情况</strong> 导入</h1>
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
                                                <label class="col-sm-2 control-label">学生缴费信息表</label>
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
                                                        <th class="sort-alpha text-center">学号</th>
                                                        <th class="sort-alpha text-center">缴费情况</th>
                                                        <th class="sort-alpha text-center">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX" v-for="(i,index) in info">
                                                        <td>{{i.学号}}</td>
                                                        <td>{{i.缴费情况}}</td>
                                                        <td class="actions text-center">
                                                            <i class="fa  color-white fa-check"></i>
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


                                    </div>


                                </section>
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
                $("#navigation").children("ul").children("li").eq(6).children("ul").children("li").eq(6).addClass("active");

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
                                        url:"../action/pay_insert.php",
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

