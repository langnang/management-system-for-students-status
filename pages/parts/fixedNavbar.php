<!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">



        <!-- Branding -->
        <div class="navbar-header col-md-2">
          <a class="navbar-brand" href="index.php">
            <strong>SSMS</strong> For Student
          </a>
          <div class="sidebar-collapse">
            <a href="#">
              <i class="fa fa-bars"></i>
            </a>
          </div>
        </div>
        <!-- Branding end -->


        <!-- .nav-collapse -->
        <div class="navbar-collapse">

          <!-- Page refresh -->
          <ul class="nav navbar-nav refresh">
            <li class="divided">
              <a href="#" class="page-refresh"><i class="fa fa-refresh"></i></a>
            </li>
          </ul>
          <!-- /Page refresh -->

          <!-- Search -->
          <div class="search" id="main-search">
            <i class="fa fa-search"></i> <input type="text" placeholder="Search...">
          </div>
          <!-- Search end -->

          <!-- Quick Actions -->
          <ul class="nav navbar-nav quick-actions">

            <li class="dropdown divided">

              <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                <i class="fa fa-tasks"></i>
                <span class="label label-transparent-black">2</span>
              </a>

            </li>

            <li class="dropdown divided">

              <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope"></i>
                <span class="label label-transparent-black">1</span>
              </a>


            </li>

            <li class="dropdown divided">

              <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                <i class="fa fa-bell"></i>
                <span class="label label-transparent-black">3</span>
              </a>


            </li>

            <li class="dropdown divided user" id="current-user">
              <div class="profile-photo">
                <img src="../assets/images/admin.jpg" alt />
              </div>
              <a class="dropdown-toggle options" data-toggle="dropdown" href="#">
                 <?php 
                 echo $_SESSION["ID"]; 
                 
                 ?><i class="fa fa-caret-down"></i>
              </a>


            </li>

          </ul>
          <!-- /Quick Actions -->



          <!-- Sidebar -->
          <ul class="nav navbar-nav side-nav" id="sidebar">

            <li class="collapsed-content"> 
              <ul>
                <li class="search"><!-- Collapsed search pasting here at 768px --></li>
              </ul>
            </li>
            <li class="navigation" id="navigation">
              <a href="#" class="sidebar-toggle" data-toggle="#navigation">Navigation <i class="fa fa-angle-up"></i></a>

              <ul class="menu">
                <li>
                  <a href="index.php">
                    <i class="fa fa-tachometer"></i> 系统主页
                  </a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-th"></i> 注册管理<b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                      <a href="register.php">
                        <i class="fa fa-caret-right"></i> 学期注册
                      </a>
                    </li>
                    <li>
                      <a href="registerApply.php">
                        <i class="fa fa-caret-right"></i> 特殊注册
                      </a>
                    </li>
                    
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-th"></i> 课程管理<b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                      <a href="termElective.php">
                        <i class="fa fa-caret-right"></i> 学期选课
                      </a>
                    </li>
                    <li>
                      <a href="termSchedule.php">
                        <i class="fa fa-caret-right"></i> 学期课程
                      </a>
                    </li>
                    
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-tint"></i> 学籍成绩<b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="statusScore.php">
                        <i class="fa fa-caret-right"></i> 个人成绩
                      </a>
                    </li>
                    <li>
                      <a href="statusProgram.php">
                        <i class="fa fa-caret-right"></i> 培养方案
                      </a>
                    </li>
                    <li>
                      <a href="statusTransaction.php">
                        <i class="fa fa-caret-right"></i> 学籍异动
                      </a>
                    </li>
                  </ul>
                </li>
                

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-list"></i> 个人信息<b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="personalPassword.php">
                        <i class="fa fa-caret-right"></i> 修改密码
                      </a>
                    </li>
                    <li>
                      <a href="personalInformation.php">
                        <i class="fa fa-caret-right"></i> 信息修改
                      </a>
                    </li>
                  </ul>
                </li>
                
              </ul>
            </li>
          </ul>
          <!-- Sidebar end -->





        </div>
        <!--/.nav-collapse -->





      </div>
      <!-- Fixed navbar end -->