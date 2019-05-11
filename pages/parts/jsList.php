<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../assets/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../assets/js/vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
<script type="text/javascript" src="../assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="../assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="../assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
<script type="text/javascript" src="../assets/js/vendor/videobackground/jquery.videobackground.js"></script>
<script type="text/javascript" src="../assets/js/vendor/blockui/jquery.blockUI.js"></script>

<script src="../assets/js/vendor/flot/jquery.flot.min.js"></script>
<script src="../assets/js/vendor/flot/jquery.flot.time.min.js"></script>
<script src="../assets/js/vendor/flot/jquery.flot.selection.min.js"></script>
<script src="../assets/js/vendor/flot/jquery.flot.animator.min.js"></script>
<script src="../assets/js/vendor/flot/jquery.flot.orderBars.js"></script>
<script src="../assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

<script src="../assets/js/vendor/rickshaw/raphael-min.js"></script> 
<script src="../assets/js/vendor/rickshaw/d3.v2.js"></script>
<script src="../assets/js/vendor/rickshaw/rickshaw.min.js"></script>
<script src="../assets/js/vendor/morris/morris.min.js"></script>
<script src="../assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>
<script src="../assets/js/vendor/summernote/summernote.min.js"></script>
<script src="../assets/js/vendor/chosen/chosen.jquery.min.js"></script>

<script src="../assets/js/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/js/vendor/datatables/ColReorderWithResize.js"></script>
<script src="../assets/js/vendor/datatables/colvis/dataTables.colVis.min.js"></script>
<script src="../assets/js/vendor/datatables/tabletools/ZeroClipboard.js"></script>
<script src="../assets/js/vendor/datatables/tabletools/dataTables.tableTools.min.js"></script>
<script src="../assets/js/vendor/datatables/dataTables.bootstrap.js"></script>

<script src="../lib/SheetJS-js-xlsx-v0.12.9-dist/xlsx.full.min.js"></script>


<script src="../assets/js/vendor/summernote/summernote.min.js"></script>

<script src="../assets/js/vendor/chosen/chosen.jquery.min.js"></script>

<script src="../assets/js/vendor/momentjs/moment-with-langs.min.js"></script>
<script src="../assets/js/vendor/datepicker/bootstrap-datetimepicker.min.js"></script>

<script src="../assets/js/vendor/summernote/summernote.min.js"></script>

<script src="../assets/js/vendor/chosen/chosen.jquery.min.js"></script>

<script src="../assets/js/vendor/momentjs/moment-with-langs.min.js"></script>
<script src="../assets/js/vendor/datepicker/bootstrap-datetimepicker.min.js"></script>

<script src="../assets/js/minimal.min.js"></script>

<script src="../lib/Vue.js-2.5.16/vue.min.js"></script>
<script>
    $(function () {
        var set_vue = new Vue({
            el: "#general-settings",
            data: {
                set: []

            },
            mounted: function () {
                this.$nextTick(function () {
//                    console.log("set");
                    $.ajax({
                        url: "../action/setup_select.php",
                        async: "true",
                        dataType: "json",
                        success: function (msg) {
                            set_vue.set = msg;
//                            console.log("set-mounted");
                        }
                    });
                });
            },
            updated: function () {
                this.$nextTick(function () {
                    for (var i = 0; i <= this.set.length - 1; i++) {
                        if (this.set[i].state === "运行") {
                            $("#general-settings").find("input").eq(i).attr("checked", "");
                        }
                    }
//                    console.log("set-updated");
                });
            }

        });





    });

</script>
