<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MCQ Admin</title>
  <link rel="icon" href="#" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('plugins/tempusdominus-bootstrap-4/css/bootstrapcards.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/summernote/summernote-bs4.css'); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fullcalendar/main.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('plugins/fullcalendar-daygrid/main.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('plugins/fullcalendar-timegrid/main.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('plugins/fullcalendar-bootstrap/main.min.css'); ?>">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand  navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo base_url('Dashboard/index') ?>" class="brand-link">
        <img src="<?php echo base_url('dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="color:#fff">MCQ Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar color-white">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <p class="text-white" style="margin-left:40px;margin-top:4px;margin-bottom:-40px"><b>Username :</b></p>
          <div class="info">
            <a href="<?php echo base_url('Dashboard/index'); ?>" class="d-block">
              <?php
              $user_id = $this->session->userdata('username');
              echo $user_id;
              ?></a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              $currURI = $class_name . ' \ ' . $uriMethod_name;
              if ($currURI == "Dashboard \ index") {
                echo "<a href='";
                echo base_url('Dashboard/index');
                echo "' class='nav-link active'> <i class='nav-icon fas fa-tachometer-alt'></i>
                    <p>
                      Dashboard
                    </p>
                  </a>";
              } elseif ($currURI == "dashboard ") {
                echo "<a href='";
                echo base_url('Dashboard/index');
                echo "' class='nav-link active'> <i class='nav-icon fas fa-tachometer-alt'></i>
                    <p>
                      Dashboard
                    </p>
                  </a>";
              } elseif ($currURI == "dashboard \ index") {
                echo "<a href='";
                echo base_url('Dashboard/index');
                echo "' class='nav-link active'> <i class='nav-icon fas fa-tachometer-alt'></i>
                    <p>
                      Dashboard
                    </p>
                  </a>";
              } else {
                echo "<a href='";
                echo base_url('Dashboard/index');
                echo "' class='nav-link'> <i class='nav-icon fas fa-tachometer-alt'></i>
                    <p>
                      Dashboard
                    </p>
                  </a>";
              }

              ?>
            </li>



            <!-- Students -->
            <li class="nav-item has-treeview ">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              if ($class_name == 'Dashboard' && $uriMethod_name == 'studentIndex') {
              ?>
                <a href="<?php echo base_url('Dashboard/studentIndex'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-user-graduate"></i>
                  <p>
                    Students
                  </p>
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('Dashboard/studentIndex'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-user-graduate"></i>
                  <p>
                    Students
                  </p>
                </a>
              <?php } ?>
            </li>

            <!-- Exams Data -->

            <li class="nav-item has-treeview ">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              if ($class_name == 'Downloads' && $uriMethod_name == 'exam') {
              ?>
                <a href="<?php echo base_url('Downloads/exam'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-clipboard"></i>
                  <p>
                    Exam Data
                  </p>
                </a>
              <?php } elseif ($class_name == 'Downloads' && $uriMethod_name == 'addExam') { ?>
                <a href="<?php echo base_url('Downloads/addExam'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-clipboard"></i>
                  <p>
                    Exam Data
                  </p>
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('Downloads/exam'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-clipboard"></i>
                  <p>
                    Exam Data
                  </p>
                </a>
              <?php } ?>
            </li>

            <!-- Syllabus -->
            <li class="nav-item has-treeview ">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              if ($class_name == 'Downloads' && $uriMethod_name == 'syllabus') {
              ?>
                <a href="<?php echo base_url('Downloads/syllabus'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Syllabus
                  </p>
                </a>
              <?php } elseif ($class_name == 'Downloads' && $uriMethod_name == 'addsyllabus') { ?>
                <a href="<?php echo base_url('Downloads/addsyllabus'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Syllabus
                  </p>
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('Downloads/syllabus'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Syllabus
                  </p>
                </a>
              <?php } ?>
            </li>

            <!-- Questions -->
            <li class="nav-item has-treeview ">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              if ($class_name == 'Downloads' && $uriMethod_name == 'question') {
              ?>
                <a href="<?php echo base_url('Downloads/question'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-question"></i>
                  <p>
                    Questions
                  </p>
                </a>
              <?php } elseif ($class_name == 'Downloads' && $uriMethod_name == 'addquestion') { ?>
                <a href="<?php echo base_url('Downloads/addquestion'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-question"></i>
                  <p>
                    Questions
                  </p>
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('Downloads/question'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-question"></i>
                  <p>
                    Questions
                  </p>
                </a>
              <?php } ?>
            </li>

            <!-- Downloads -->
            <li class="nav-item has-treeview ">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              if ($class_name == 'Downloads' && $uriMethod_name == 'index') {
              ?>
                <a href="<?php echo base_url('Downloads/index'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-file-download"></i>
                  <p>
                    Download Material
                  </p>
                </a>
              <?php } elseif ($class_name == 'Downloads' && $uriMethod_name == 'add') { ?>
                <a href="<?php echo base_url('Downloads/index'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-file-download"></i>
                  <p>
                    Download Material
                  </p>
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('Downloads/index'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-file-download"></i>
                  <p>
                    Download Material
                  </p>
                </a>
              <?php } ?>
            </li>

            <li class="nav-item has-treeview ">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              if ($class_name == 'Downloads' && $uriMethod_name == 'notifications') {
              ?>
                <a href="<?php echo base_url('Downloads/notifications'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-exclamation"></i>
                  <p>
                    Notifications
                  </p>
                </a>
              <?php } elseif ($class_name == 'Downloads' && $uriMethod_name == 'addNotifications') { ?>
                <a href="<?php echo base_url('Downloads/addNotifications'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-exclamation"></i>
                  <p>
                    Notifications
                  </p>
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('Downloads/notifications'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-exclamation"></i>
                  <p>
                    Notifications
                  </p>
                </a>
              <?php } ?>
            </li>

            <li class="nav-item has-treeview ">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              if ($class_name == 'Downloads' && $uriMethod_name == 'ca') {
              ?>
                <a href="<?php echo base_url('Downloads/ca'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p>
                    Current Affairs
                  </p>
                </a>
              <?php } elseif ($class_name == 'Downloads' && $uriMethod_name == 'addCA') { ?>
                <a href="<?php echo base_url('Downloads/addCA'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p>
                    Current Affairs
                  </p>
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('Downloads/ca'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p>
                    Current Affairs
                  </p>
                </a>
              <?php } ?>
            </li>

            <li class="nav-item has-treeview ">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              if ($class_name == 'Downloads' && $uriMethod_name == 'ue') {
              ?>
                <a href="<?php echo base_url('Downloads/ue'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-clock"></i>
                  <p>
                    Upcoming Exams
                  </p>
                </a>
              <?php } elseif ($class_name == 'Downloads' && $uriMethod_name == 'addUE') { ?>
                <a href="<?php echo base_url('Downloads/addUE'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-clock"></i>
                  <p>
                    Upcoming Exams
                  </p>
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('Downloads/ue'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-clock"></i>
                  <p>
                    Upcoming Exams
                  </p>
                </a>
              <?php } ?>
            </li>

             <!-- Result -->
             <li class="nav-item has-treeview ">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              if ($class_name == 'Downloads' && $uriMethod_name == 'result') {
              ?>
                <a href="<?php echo base_url('Downloads/result'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-divide"></i>
                  <p>
                    Results
                  </p>
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('Downloads/result'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-divide"></i>
                  <p>
                    Results
                  </p>
                </a>
              <?php } ?>
            </li>

            <!-- Result -->
            <li class="nav-item has-treeview ">
              <?php $class_name = $this->router->fetch_class();
              $uriMethod_name = $this->router->fetch_method();
              if ($class_name == 'Downloads' && $uriMethod_name == 'sendEmail') {
              ?>
                <a href="<?php echo base_url('Downloads/sendEmail'); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>
                    Email Subscription
                  </p>
                </a>
              <?php } else { ?>
                <a href="<?php echo base_url('Downloads/sendEmail'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>
                  Email Subscription
                  </p>
                </a>
              <?php } ?>
            </li>


            <!-- setting -->
            <?php $class_name = $this->router->fetch_class();
            $uriMethod_name = $this->router->fetch_method();
            $currrURI = $class_name . ' \ ' . $uriMethod_name;
            if ($currrURI == "users \ profile") {
              echo "<li class='nav-item has-treeview menu-open'> <a href='' class='nav-link active'>
                    <i class='nav-icon fas fa-wrench'></i>
                    <p style='color:#fff'>
                    Settings
                      <i class='fas fa-angle-left right'></i>
                    </p>
                  </a> <ul class='nav nav-treeview'>
                  <li class='nav-item'>
                    <a href='";
              echo base_url('users/profile');
              echo " ' class='nav-link active'> <i class='fa fa-user'></i>
                    <p>Profile</p>
                  </a>
                </li>
                
                <li class='nav-item'>
                  <a href=' ";
              echo base_url('Users/setting');

              echo " 'class='nav-link'>
                    <i class='fa fa-pen'></i>
                    <p>Edit Profile</p>
                  </a>
                </li>
                
                </ul> </li>";
            } elseif ($currrURI == "Users \ setting") {
              echo " <li class='nav-item has-treeview menu-open'> <a href='' class='nav-link active'>
                    <i class='nav-icon fas fa-wrench'></i>
                    <p style='color:#fff'>
                    Settings
                      <i class='fas fa-angle-left right'></i>
                    </p>
                  </a> <ul class='nav nav-treeview'>
                  <li class='nav-item'>
                    <a href='";
              echo base_url('users/profile');
              echo "' class='nav-link'>  <i class='fa fa-user'></i>
                    <p>Profile</p>
                  </a>
                </li>
                
                <li class='nav-item'>
                  <a href=' ";
              echo base_url('Users/setting');
              echo " 'class='nav-link active'>
                    <i class='fa fa-pen'></i>
                    <p>Edit Profile</p>
                  </a>
                </li>
               
                </ul> </li>";
            } else {
              echo " <li class='nav-item has-treeview'><a href='' class='nav-link '>
                    <i class='nav-icon fas fa-wrench'></i>
                    <p style='color:#fff'>
                    Settings
                      <i class='fas fa-angle-left right'></i>
                    </p>
                  </a> <ul class='nav nav-treeview'>
                  <li class='nav-item'>
                    <a href='";
              echo base_url('users/profile');
              echo "' class='nav-link'> <i class='fa fa-user'></i>
                    <p>&nbsp Profile</p>
                  </a>
                </li>
                <li class='nav-item'>
                  <a href=' ";
              echo base_url('Users/setting');
              echo " 'class='nav-link'>
                    <i class='fa fa-pen'></i>
                    <p>&nbsp Edit Profile</p>
                  </a>
                </li>
               
                </ul> </li>";
            }
            ?>
            <!-- function for logout -->
            <li class=" nav-item has-treeview bg-danger" style="border-radius: 9px;">
              <a href="<?php echo base_url('Auth/logout'); ?>" class="nav-link">
                <i class="nav-icon fas fa-lock"></i>
                <p style="color:#fff">Logout</p>
              </a>
            </li>
            <!-- function for logout end -->
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  </div>
</body>

</html>