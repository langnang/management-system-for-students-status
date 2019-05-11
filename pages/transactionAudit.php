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


                        <h2><i class="fa fa-tachometer"></i> 高校学籍管理系统<span>学籍异动管理</span></h2>


                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li>位置</li>
                                <li><a href="index.php">主页</a></li>
                                <li><a href="transactionSummary.php">学籍异动</a></li>
                                <li class="active">异动审核</li>
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
                                        <h1><strong>{{set.mark}}</strong> 学籍异动审核名单
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
                                                        <th class="sort-alpha text-center">申请编号</th>
                                                        <th class="sort-alpha text-center">类型</th>
                                                        <th class="sort-alpha text-center">学号</th>
                                                        <th class="sort-alpha text-center">申请理由</th>
                                                        <th class="sort-alpha text-center">审核结果</th>
                                                        <th class="sort-alpha text-center">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX" v-for="(t,index) in tra" v-if="t.result===null">
                                                        <td>{{t.id}}</td>
                                                        <td>{{t.type}}</td>
                                                        <td>{{t.id_student}}</td>
                                                        <td>{{t.reason}}</td>
                                                        <td> 
                                                            <div class="radio radio-transparent radio-inline">
                                                                <input type="radio" v-bind:name="t.id" v-bind:id="'0'+t.id" value="未通过" checked="">
                                                                <label v-bind:for="'0'+t.id">未通过</label>
                                                                <input type="radio" v-bind:name="t.id" v-bind:id="'1'+t.id" value="通过">
                                                                <label v-bind:for="'1'+t.id">通过</label>
                                                            </div></td>
                                                        <td class="actions text-center">
                                                            <a class="edit" href="#" v-on:click="edit(index)">审核</a>
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
                $("#navigation").children("ul").children("li").eq(4).addClass("active open");
                $("#navigation").children("ul").children("li").eq(4).children("ul").children("li").eq(1).addClass("active");

                var tra_vue = new Vue({
                    el: "#graduationAudit",
                    data: {
                        set: [],
                        tra: [],
                        page: [],
                        length: "",
                        page: {min: "", max: ""}
                    },
                    mounted: function () {
                        this.$nextTick(function () {
                            $.ajax({
                                url: "../action/setup_selectbyname.php",
                                async: "false",
                                data: {name: "学籍异动"},
                                type: "post",
                                dataType: "json",
                                success: function (msg) {
//                                    console.log(msg[0]);
                                    tra_vue.set = msg[0];
                                }
                            });
                        });
                    },
                    watch: {
                        set: function () {
                            var mark = this.set.mark;
                            $.ajax({
                                url: "../action/transaction_select.php",
                                async: "false",
                                data: {entrance: mark},
                                type: "post",
                                dataType: "json",
                                success: function (msg) {
                                    tra_vue.tra = msg;
                                    console.log(msg);
                                    tra_vue.length = tra_vue.tra.length;
                                    tra_vue.page.min = 1;
                                    tra_vue.page.max = tra_vue.tra.length;
                                }
                            });
                        }

                    },
                        methods: {
                            edit: function (index) {
                                var id = this.tra[index].id;
                                if(confirm("确定提交"+id+"申请单的审核信息么？")){
                                var result = $('input[name="'+id+'"]:checked ').val();
                                $.ajax({
                                    url:"../action/transaction_updateResult.php",
                                    data:{id:id,result:result},
                                    type:"post",
                                    success:function(msg){
                                       if(msg==='1'){
                                           alert("审核成功");
                                       }else{
                                           alert("审核失败");
                                       }
                                    }
                                })
                            }
                            }
                        }
                });

            });

        </script>
    </body>
</html>
