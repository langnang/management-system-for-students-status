<!DOCTYPE html>
<html>
  <head>
    <title>高校学籍管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">
    <link href="assets/css/minimal.css" rel="stylesheet">
  </head>
  <body class="bg-3">
    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Make page fluid -->
      <div class="row">
        <!-- Page content -->
        <div id="content" class="col-md-12 full-page login">
          <div class="inside-block">
            <img src="assets/images/logo-big.png" alt class="logo">
            <h1>高校学籍管理系统</h1>
            <form>
              <section>
                <div class="input-group">
                  <input type="text" class="form-control" name="username" placeholder="账号">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group">
                  <input type="password" class="form-control" name="password" placeholder="密码">
                  <div class="input-group-addon"><i class="fa fa-key"></i></div>
                </div>
              </section>
              <section class="controls">
                <div class="checkbox check-transparent">
                  <input type="checkbox" value="1" id="remember" checked>
                  <label for="remember">记住我</label>
                </div>
                <a href="#">忘记密码?</a>
              </section>
              <section class="log-in">
                  <button type="button" class="btn btn-greensea" onclick="signin()">登录</button>
              </section>
            </form>
          </div>
        </div>
        <!-- /Page content -->  
      </div>
    </div>
    <!-- Wrap all page content end -->
    <script src="assets/js/jquery.js"></script>
    <script>
        $(function(){
            signin=function(){
                console.log($("input").length);
                var name=$("input").eq(0).val();
                var pwd=$("input").eq(1).val();
                if(name!==""&&pwd!==""){
                    $.ajax({
                        url:"action/admin_signin.php",
                        type:"post",
                        data:{name:name,password:pwd},
                        success:function(msg){
                            console.log(msg);
                            if(msg==="1"){
                                alert("登陆成功!");
                                $("form").attr("action", "pages/index.php");
                                $("form").attr("method", "post");
                                        $("form").submit();
                            }else{
                                alert("登录失败，用户名或密码错误！");
                            }
                        }
                    });
                        
                }else{
                    alert("用户名或密码不可为空！");
                }
            };
        });
    </script>
  </body>
</html>
      
