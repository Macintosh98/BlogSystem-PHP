<body class="app sidebar-mini rtl" >
<div id="content">
    <main class="app-content" >
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <?php if($_SESSION['access_control']=='superadmin') { ?>
                <h4>Admins</h4>
                <p><b><?php $results = dbFetch(dbQuery("SELECT count(*) FROM blog_admin where access_control='admin'")); echo $results['count(*)']?></b></p>
              <?php } else if($_SESSION['access_control']=='admin') { ?>
                <h4>Admins</h4>
                <p><b><?php $results = dbFetch(dbQuery("SELECT count(*) FROM blog_admin where access_control='user'")); echo $results['count(*)']?></b></p>
              <?php } else if($_SESSION['access_control']=='user') { 
                $name=$_SESSION['admin_name'];?>
                <h4>Post Count</h4> 
                <p><b><?php $results = dbFetch(dbQuery("SELECT count(*) FROM blog where Publisher='$name'")); echo $results['count(*)']?></b></p>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">             
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Published</h4>
              <p><b><?php $results =  dbFetch(dbQuery("SELECT count(*) FROM blog where Publish_Status='1'")); echo $results['count(*)']?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Pending</h4>
              <p><b><?php $results =  dbFetch(dbQuery("SELECT count(*) FROM blog where Publish_Status='0'")); echo $results['count(*)']?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Targate</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      <?php if($_SESSION['access_control']!='user') { ?>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>UserName</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if($_SESSION['access_control']=='superadmin') { ?>
                    <?php 
                      $results = dbQuery("SELECT * FROM blog_admin where access_control='admin'");
                      $admins=dbFetchAll($results);
                      //print_r( $results);
                      foreach ($admins as $admin) {
                        ?><tr>
                            <td><?php echo $admin['username']?></td>
                            <td><?php echo $admin['name']?></td>
                            <td><?php echo $admin['email']?></td>
                            <td><?php echo $admin['mobile']?></td>
                            <td><?php echo $admin['address']?></td>
                            <td>
                              <button class="btn btn-warning" id="add_users" data-id="<?php echo $admin['ID']?>">Add</button>
                              <button class="btn btn-primary" id="view_users" data-id="<?php echo $admin['ID']?>">View</button>   
                            </td>
                        </tr><?php          
                      }
                    ?>
                  <?php } else if($_SESSION['access_control']=='admin') { ?>
                    <?php $name=$_SESSION["active_admin"];
                      $results = dbQuery("SELECT * FROM blog_admin where access_control='user' and control='$name'");
                      $admins=dbFetchAll($results);
                      foreach ($admins as $admin) {
                        ?><tr>
                            <td><?php echo $admin['username']?></td>
                            <td><?php echo $admin['name']?></td>
                            <td><?php echo $admin['email']?></td>
                            <td><?php echo $admin['mobile']?></td>
                            <td><?php echo $admin['address']?></td>
                            <td>
                              <button class="btn btn-warning" id="" data-id="<?php echo $admin['ID']?>">Add</button>
                              <button class="btn btn-primary" id="" data-id="<?php echo $admin['ID']?>">View</button>   
                            </td>
                        </tr><?php          
                      }
                    ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Line Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Bar Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Radar Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="radarChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Polar Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="polarChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Pie Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Doughnut Chart</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="doughnutChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
    </main>
</div>
</body>
