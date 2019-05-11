<!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">



        <!-- Branding -->
        <div class="navbar-header col-md-2">
          <a class="navbar-brand" href="index.php">
            <strong>SSMS</strong>
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
                 SYSTEM admin<i class="fa fa-caret-down"></i>
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
                    <i class="fa fa-tachometer"></i> 学籍管理主页
                  </a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-list"></i> 学生信息管理<b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="studentSummary.php">
                        <i class="fa fa-caret-right"></i> 学生信息汇总
                      </a>
                    </li>
                    <li>
                      <a href="studentInquiry.php">
                        <i class="fa fa-caret-right"></i> 学生信息查询
                      </a>
                    </li>
                    <li>
                      <a href="studentImport.php">
                        <i class="fa fa-caret-right"></i> 学生信息导入
                      </a>
                    </li>
                    <li>
                      <a href="studentPassword.php">
                        <i class="fa fa-caret-right"></i> 学生密码修改
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-pencil"></i> 学期注册管理<b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="registerSummary.php">
                        <i class="fa fa-caret-right"></i> 学期注册汇总
                      </a>
                    </li>
                    <li>
                      <a href="registerUpdate.php">
                        <i class="fa fa-caret-right"></i> 学期注册操作
                      </a>
                    </li>
                    <li>
                      <a href="registerSchedule.php">
                        <i class="fa fa-caret-right"></i> 学期课程导入
                      </a>
                    </li>
                    <li>
                      <a href="registerElective.php">
                        <i class="fa fa-caret-right"></i> 学期选课操作
                      </a>
                    </li>
                    <li>
                      <a href="registerDelay.php">
                        <i class="fa fa-caret-right"></i> 学期特殊注册
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-tint"></i> 学业预警管理<b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="earlyWarningSummary.php">
                        <i class="fa fa-caret-right"></i> 学业预警汇总
                      </a>
                    </li>
                    <li>
                      <a href="earlyWarningTerm.php">
                        <i class="fa fa-caret-right"></i> 学期学业预警
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-th"></i> 学籍异动管理<b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="transactionSummary.php">
                        <i class="fa fa-caret-right"></i> 学籍异动汇总
                      </a>
                    </li>
                    <li>
                      <a href="transactionAudit.php">
                        <i class="fa fa-caret-right"></i> 学籍异动审核
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-th-large"></i> 毕业审核管理<b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="graduationSummary.php">
                        <i class="fa fa-caret-right"></i> 毕业审核汇总
                      </a>
                    </li>
                    <li>
                      <a href="graduationAuditSucceed.php">
                        <i class="fa fa-caret-right"></i> 学年毕业审核
                      </a>
                    </li>
                    <li>
                      <a href="graduationAuditFailed.php">
                        <i class="fa fa-caret-right"></i> 毕业审核预警
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-desktop"></i> 基本信息设置 <b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                      <a href="basicSummary.php">
                        <i class="fa fa-caret-right"></i> 基本信息汇总
                      </a>
                    </li>
                    <li>
                      <a href="basicCollege.php">
                        <i class="fa fa-caret-right"></i> 学院信息设置
                      </a>
                    </li>
                    <li>
                      <a href="basicMajor.php">
                        <i class="fa fa-caret-right"></i> 专业信息设置
                      </a>
                    </li>
                    <li>
                        <a href="basicCourse.php">
                        <i class="fa fa-caret-right"></i> 基础课程导入
                      </a>
                    </li>
                    <li>
                        <a href="basicProgram.php">
                        <i class="fa fa-caret-right"></i> 培养方案设置
                      </a>
                    </li>
                    <li>
                        <a href="basicScore.php">
                        <i class="fa fa-caret-right"></i> 学生成绩导入
                      </a>
                    </li>
                    <li>
                        <a href="basicPay.php">
                        <i class="fa fa-caret-right"></i> 缴费情况导入
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-play-circle"></i> 系统运行设置<b class="fa fa-plus dropdown-plus"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="operationSummary.php">
                        <i class="fa fa-caret-right"></i> 系统运行汇总
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-caret-right"></i> 动态信息设置
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="settings" id="general-settings">
              <a href="#" class="sidebar-toggle underline" data-toggle="#general-settings">功能设置 <i class="fa fa-angle-up"></i></a>
              <div class="form-group" v-for="(s,index) in set">
                <label class="col-xs-8 control-label">{{s.name}}</label>
                <div class="col-xs-4 control-label">
                  <div class="onoffswitch labeled cyan">
                      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch-on" disabled="">
                    <label class="onoffswitch-label" for="switch-on">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                    </label>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!-- Sidebar end -->





        </div>
        <!--/.nav-collapse -->





      </div>
      <!-- Fixed navbar end -->