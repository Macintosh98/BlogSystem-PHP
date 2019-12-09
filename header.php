<head>
    <title>Policy planner Admin Panel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/croppie.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- text editor css-->

  <link rel="stylesheet" href="froala_editor_3.0.3/css/froala_editor.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/froala_style.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/code_view.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/draggable.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/colors.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/emoticons.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/image_manager.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/image.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/table.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/char_counter.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/video.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/file.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/quick_insert.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/help.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/third_party/spell_checker.css">
  <link rel="stylesheet" href="froala_editor_3.0.3/css/plugins/special_characters.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  <style>
  .treeview-item {
    background-color: #7b88ff;
  }
  .app-header__logo {
    background-color: #7b88ff;
  }
  .table{
        margin-bottom: auto; 
  }
  /* .app-content {
    background-color: #7b88ff;
  } */
  .app-title {
    background-color: #7b88ff;
    color:white;
  }
  </style>
</head>
  
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" data-toggle="sidebar" href="index.php" >Policy Planner</a>
  <!-- Navbar Right Menu-->
  <ul class="app-nav">
    <!-- <li class="app-search">
      <input class="app-search__input" type="search" placeholder="Search">
      <button class="app-search__button"><i class="fa fa-search"></i></button>
    </li>
    Notification Menu
    <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
      <ul class="app-notification dropdown-menu dropdown-menu-right">
        <li class="app-notification__title">You have 4 new notifications.</li>
        <div class="app-notification__content">
          <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
              <div>
                <p class="app-notification__message">Lisa sent you a mail</p>
                <p class="app-notification__meta">2 min ago</p>
              </div></a></li>
          <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
              <div>
                <p class="app-notification__message">Mail server not working</p>
                <p class="app-notification__meta">5 min ago</p>
              </div></a></li>
          <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
              <div>
                <p class="app-notification__message">Transaction complete</p>
                <p class="app-notification__meta">2 days ago</p>
              </div></a></li>
          <div class="app-notification__content">
            <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                <div>
                  <p class="app-notification__message">Lisa sent you a mail</p>
                  <p class="app-notification__meta">2 min ago</p>
                </div></a></li>
            <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                <div>
                  <p class="app-notification__message">Mail server not working</p>
                  <p class="app-notification__meta">5 min ago</p>
                </div></a></li>
            <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                <div>
                  <p class="app-notification__message">Transaction complete</p>
                  <p class="app-notification__meta">2 days ago</p>
                </div></a></li>
          </div>
        </div>
        <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
      </ul>
    </li> -->
    <!-- User Menu-->
    <li>
    <?php if($_SESSION['access_control']=='superadmin') { ?>
            <button style="margin-top: 6px" class="btn btn-warning" data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-lg"></i> Register</button>
    <?php } ?>
    </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
    <li>
      <a style="margin-top: 6px" class="btn btn-danger" href="login.php?logout=1"><i class="fa fa-sign-out fa-lg"></i>Logout</a>
    </li>
  </ul>
</header>

<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="user.png" height="48" width="48" alt="User Image">
    <div>
      <p class="app-sidebar__user-name" style="text-transform: capitalize;"><?php echo $_SESSION['admin_name'] ?></p>
      <p class="app-sidebar__user-designation" style="text-transform: uppercase;"><?php echo $_SESSION['access_control'] ?></p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="./index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Blog's</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="javascript:void(0);" onclick="posts('addpost.php')"><i class="icon fa fa-circle-o"></i> Add Post</a></li>
        <li><a class="treeview-item" href="javascript:void(0);" onclick="posts('viewpost.php')"><i class="icon fa fa-circle-o"></i> View Post</a></li>
        <!-- <li><a class="treeview-item" href="javascript:void(0);" onclick="posts('bootstrap-components.php')"><i class="icon fa fa-circle-o"></i> Bootstrap Components</a></li> -->
      </ul>
    </li>

    <li><a class="app-menu__item" href="javascript:void(0);" onclick="posts('profile.php')"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Profile</span></a>
    </li>
    <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Statistics</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="javascript:void(0);" onclick="posts('charts.php')"><i class="icon fa fa-circle-o"></i> Charts</a></li>
        <li><a class="treeview-item" href="javascript:void(0);" onclick="posts('reports.php')"><i class="icon fa fa-circle-o"></i> Reports</a></li>
      </ul>
    </li>
    <li><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
    </li>
    <li><a class="app-menu__item" href="javascript:void(0);" onclick="posts('chat.php')"><i class="app-menu__icon fa  fa-edit"></i><span class="app-menu__label">Chat</span></a></li>
    <li><a class="app-menu__item" href="javascript:void(0);" onclick="posts('settings.php')"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span></a></li> -->
  </ul>
</aside>