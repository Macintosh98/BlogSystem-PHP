<div id="insertimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><!-- Crop & Insert Image --></h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 text-center">
            <div id="image_demo" style="width:350px; margin-top:30px"></div>
          </div>
          <div class="col-md-4" style="padding-top:30px;">
        <br />
        <br />
        <br/>
            <button class="btn btn-success crop_image"style="width: 156px;
    margin-left: -5px;">Crop & Insert Image</button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-body" id="model_view">
      </div>
    </div>
  </div>
</div>


<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Registration Page</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="myModal_body">
              <form class="form-horizontal">
              <div class="form-group row">
                  <label class="control-label col-md-3">Username</label>
                  <div class="col-md-8">
                    <input class="form-control" id="username" type="text" placeholder="Enter Username" onkeyup="doCheck('username');">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Password</label>
                  <div class="col-md-8">
                    <input class="form-control" id="password" type="password" placeholder="Enter Password" onkeyup="doCheck('password');">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                    <input class="form-control" id="name" type="text" placeholder="Enter full name" onkeyup="doCheck('name');">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input class="form-control" id="email" type="email" placeholder="Enter email address" onkeyup="doCheck('email');">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Mobile</label>
                  <div class="col-md-8">
                    <input class="form-control" id="mobile" type="text" placeholder="Enter Mobile Number" onkeyup="doCheck('mobile');">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Address</label>
                  <div class="col-md-8">
                    <input class="form-control" id="address" type='text' placeholder="Enter your address" onkeyup="doCheck('address');">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Access Control</label>
                  <div class="col-md-8">
                    <select class="form-control" id="access_control">
                      <option value="superadmin">Super Admin</option>
                      <option value="admin">Admin </option>
                      <option value="user">User </option>
                    </select>
                  </div>
                </div>

              </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button class="btn btn-primary" type="button" onclick="submit('register')"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/froala_editor.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/align.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/char_counter.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/colors.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/entities.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/file.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/font_size.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/fullscreen.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/image.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/line_breaker.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/inline_style.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/link.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/quick_insert.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/quote.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/table.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/save.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/url.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/video.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/help.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/print.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/third_party/spell_checker.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/special_characters.min.js"></script>
<script type="text/javascript" src="froala_editor_3.0.3/js/plugins/word_paste.min.js"></script>

<!-- Plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
<script type="text/javascript" src="js/plugins/croppie.js"></script>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/chart.js"></script>
<script type="text/javascript" src="js/plugins/jquery.simplePagination.js"></script>

<script src="assets/maugallery.js"></script>
<script src="assets/scripts.js"></script>


<script type="text/javascript"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>

<script type="text/javascript">
  var data = {
    labels: ["January", "February", "March", "April", "May"],
    datasets: [
      {
        label: "My First dataset",
        fillColor: "rgba(220,220,220,0.2)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(220,220,220,1)",
        data: [65, 59, 80, 81, 56]
      },
      {
        label: "My Second dataset",
        fillColor: "rgba(151,187,205,0.2)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(151,187,205,1)",
        data: [28, 48, 40, 19, 86]
      }
    ]
  };
  var pdata = [
    {
      value: 300,
      color:"#F7464A",
      highlight: "#FF5A5E",
      label: "Red"
    },
    {
      value: 50,
      color: "#46BFBD",
      highlight: "#5AD3D1",
      label: "Green"
    },
    {
      value: 100,
      color: "#FDB45C",
      highlight: "#FFC870",
      label: "Yellow"
    }
  ]

  var ctxl = $("#lineChartDemo").get(0).getContext("2d");
  var lineChart = new Chart(ctxl).Line(data);

  var ctxb = $("#barChartDemo").get(0).getContext("2d");
  var barChart = new Chart(ctxb).Bar(data);

  var ctxr = $("#radarChartDemo").get(0).getContext("2d");
  var radarChart = new Chart(ctxr).Radar(data);

  var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
  var polarChart = new Chart(ctxpo).PolarArea(pdata);

  var ctxp = $("#pieChartDemo").get(0).getContext("2d");
  var pieChart = new Chart(ctxp).Pie(pdata);

  var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
  var doughnutChart = new Chart(ctxd).Doughnut(pdata);

  $('#sampleTable').DataTable();

function posts(str) {
  $.ajax({
  type: "POST",
  url: str,
  success: function(data){
    $("#content").html(data);
  }
  });
}


function doCheck(val)
{
  if(val=='mobile')
  {
    var temp=document.getElementById('mobile').value;
    var len=document.getElementById('mobile').value.length;
    if(isNaN(temp))
    {
      $("#mobile").removeClass("is-valid");
      $("#mobile").addClass("is-invalid");
    }
    else
    {
      if((len > 10) || (len < 10))
      {
        $("#mobile").removeClass("is-valid");
        $("#mobile").addClass("is-invalid");
      }
      else if(len == 10)
      {
        $("#mobile").removeClass("is-invalid");
        $("#mobile").addClass("is-valid");
      }
    }
  }
  else if(val=='email')
  {
    var x = $('#email').val();

    var atposition=x.indexOf("@");
    var dotposition=x.lastIndexOf(".");
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
    {
      $("#email").removeClass("is-valid");
      $("#email").addClass("is-invalid");
    }
    else
    {
      $("#email").removeClass("is-invalid");
      $("#email").addClass("is-valid");
    }
  }
  else if(val=='username')
  {
    if($('#username').val()=='')
    {
      $("#username").removeClass("is-valid");
      $("#username").addClass("is-invalid");
    }
    else
    {
      $("#username").removeClass("is-invalid");
      $("#username").addClass("is-valid");
    }
  }
  else if(val=='password')
  {
    if($('#password').val()=='')
    {
      $("#password").removeClass("is-valid");
      $("#password").addClass("is-invalid");
    }
    else
    {
      $("#password").removeClass("is-invalid");
      $("#password").addClass("is-valid");
    }
  }
  else if(val=='name')
  {
    if($('#name').val()=='')
    {
      $("#name").removeClass("is-valid");
      $("#name").addClass("is-invalid");
    }
    else
    {
      $("#name").removeClass("is-invalid");
      $("#name").addClass("is-valid");
    }
  }
  else if(val=='address')
  {
    if($('#address').val()=='')
    {
      $("#address").removeClass("is-valid");
      $("#address").addClass("is-invalid");
    }
    else
    {
      $("#address").removeClass("is-invalid");
      $("#address").addClass("is-valid");
    }
  }
  else if(val=='pagename')
  {
    if($('#pagename').val()=='')
    {
      $("#pagename").removeClass("is-valid");
      $("#pagename").addClass("is-invalid");
    }
    else
    {
      $("#pagename").removeClass("is-invalid");
      $("#pagename").addClass("is-valid");
      var space_count =$('#pagename').val().search(" ");
      console.log(space_count);
      if(space_count!=-1)
      {
        $("#pagename").removeClass("is-valid");
        $("#pagename").addClass("is-invalid");
      }
    }
  }
  else if(val=='title')
  {
    if($('#title').val()=='')
    {
      $("#title").removeClass("is-valid");
      $("#title").addClass("is-invalid");
    }
    else
    {
      $("#title").removeClass("is-invalid");
      $("#title").addClass("is-valid");
    }
  }
  else if(val=='meta_dis')
  {
    if($('#meta_dis').val()=='')
    {
      $("#meta_dis").removeClass("is-valid");
      $("#meta_dis").addClass("is-invalid");
    }
    else
    {
      $("#meta_dis").removeClass("is-invalid");
      $("#meta_dis").addClass("is-valid");
      var n=$("#meta_dis").val().length;
        console.log(n);
        if(n>11)
        $('#meta_dis_success_bar').css({"width": "10%"});
        if(n>22)
        $('#meta_dis_success_bar').css({"width": "20%"});
        if(n>33)
        $('#meta_dis_success_bar').css({"width": "30%"});
        if(n>44)
        $('#meta_dis_success_bar').css({"width": "40%"});
        if(n>55)
        $('#meta_dis_success_bar').css({"width": "50%"});
        if(n>66)
        $('#meta_dis_success_bar').css({"width": "60%"});
        if(n>77)
        $('#meta_dis_success_bar').css({"width": "70%"});
        if(n>88)
        $('#meta_dis_success_bar').css({"width": "80%"});
        if(n>99)
        $('#meta_dis_success_bar').css({"width": "90%"});
        if(n>110)
        $('#meta_dis_success_bar').css({"width": "100%"});
    }
  }
  else if(val=='meta_key')
  {
    if($('#meta_key').val()=='')
    {
      $("#meta_key").removeClass("is-valid");
      $("#meta_key").addClass("is-invalid");
    }
    else
    {
      $("#meta_key").removeClass("is-invalid");
      $("#meta_key").addClass("is-valid");
    }
  }
}



function submit(val,first,sec) {
  if(val=='post')
  {
      $.ajax({
      type: "POST",
      url: "content_save.php",
      data: {
        from:"addpost_page",
        domain:$('#domain').val(),
        category:$('#category').val(),
        pagename:$('#pagename').val(),
        meta_dis:$('#meta_dis').val(),
        meta_key:$('#meta_key').val(),
        title:$('#title').val(),
        contents:$('#preview').html(),
        image_ID:$('#Home_Image').val(),
        },
      success: function(data){
        if(data=='correct'){
          posts('addpost.php');
          swal("Post Saved!", "Your post has been Save sucssesfully.", "success");
        }else{
          swal("Not Saved!", "Your post has been not Save sucssesfully.", "error");
          console.log (data);
        }
      }
      });
    }
    else if(val=='post_update')
    {
      $.ajax({
      type: "POST",
      url: "content_save.php",
      data: {
        from:"updatepost_page",
        ID:first,
        domain:$('#domain').val(),
        category:$('#category').val(),
        pagename:$('#pagename').val(),
        title:$('#title').val(),
        contents:$('#preview').html()
        },
      success: function(data){
        if(data=='correct'){
          posts('addpost.php');
          swal("Post Saved!", "Your post has been Save sucssesfully.", "success");
        }else{
          swal("Not Saved!", "Your post has been not Save sucssesfully.", "error");
        }
      }
      });
    }
    else if(val=='image')
    {
      $.ajax({
      type: "POST",
      url: "content_save.php",
      data: {
        from:"addpost_image",
        video:$('#video_link').val(),
        },
      success: function(data){
        if(data=='correct'){
          posts('addpost.php');
          swal("Video Saved!", "Your video has been Save sucssesfully.", "success");
        }else{
          swal("Not Saved!", "Your video has been not Save sucssesfully.", "error");
        }
      }
      });
    }
    else if(val=='video')
    {
      $.ajax({
      type: "POST",
      url: "content_save.php",
      data: {
        from:"addpost_video",
        video:$('#video_link').val(),
        },
      success: function(data){
        if(data=='correct'){
          posts('addpost.php');
          swal("Video Saved!", "Your video has been Save sucssesfully.", "success");
        }else{
          swal("Not Saved!", "Your video has been not Save sucssesfully.", "error");
        }
      }
      });
    }
    else if(val=='register')
    {
      if( ($('#username').val()!="")&&($('#password').val()!="")&&($('#name').val()!="")&&($('#email').val()!="")&&($('#mobile').val()!="")&&($('#address').val()!="")&&($("#access_control").val()!=""))
      {
        $.ajax({
        type: "POST",
        url: "content_save.php",
        data: {
          from:"register_page",
          username:$('#username').val(),
          password:$('#password').val(),
          name:$('#name').val(),
          email:$('#email').val(),
          mobile:$('#mobile').val(),
          address:$('#address').val(),
          access_control:$("#access_control").val()
        },
        success: function(data){
          if(data=='correct'){
            //posts('register.php')
            swal("Register Sucssesfully!", "Your account has been Save sucssesfully.", "success");
          }else{
            swal("Not Saved!", "Your account has been not Save", "error");
          }
        }
        });
      }
      else
      {
        swal("Enter All Information!", "Your account has been not Save", "error");
      }

    }
    else if(val=='adduser')
    {
      $.ajax({
      type: "POST",
      url: "content_save.php",
      data: {
        from:"adduser_page",
        user:first,
        admin:sec,
        },
      success: function(data){
        if(data=='correct'){
          swal("User Added!", "Your user has been added to Admin", "success");
          $('#myModal2').modal('hide');
        }else{
          swal("error", "error", "error");
          console.log(data);
        }
      }
      });
    }
}




$(document).on('click', '#view', function () {
        var ID=$(this).attr('data-id');
        $.ajax({
            url: "content_save.php",
            data : {
              ID:ID,
              from:"view",
            },
            type : 'POST',
            success: function(data){
              $('#model_view').html(data);
            }
        });
    });


    $(document).on('click', '#edit_content', function () {
        var ID=$(this).attr('data-id');
        $.ajax({
            type : 'POST',
            url: "addpost.php",
            data : {ID:ID},
            success: function(data){
              $("#content").html(data);
            }
        });
    });

    $(document).on('click', '#publish', function () {
        var ID=$(this).attr('data-id');
        $.ajax({
            url: "content_save.php",
            data : {
              ID:ID,
              from:"publish",
            },
            type : 'POST',
            success: function(data){
              if(data=='correct'){
                $('#'+ID).remove();
                swal("Publish!", "Your post has been publish sucssesfully.", "success");
              }else{
                swal("Not Publish!", "Your post has not publish", "error");
              }
            }
        });
    });

    $(document).on('click', '#delete', function () {
        var ID=$(this).attr('data-id');
        $.ajax({
            url: "content_save.php",
            data : {
              ID:ID,
              from:"delete",
            },
            type : 'POST',
            success: function(data){
              if(data=='correct'){
                $('#'+ID).remove();
                swal("Deleted!", "Your post has been deleted.", "success");
              }else{
                swal("Not Deleted!", "Your post has not been deleted.", "error");
              }
            }
        });
    });
    
    $(document).on('click', '#add_users', function () {
        var ID=$(this).attr('data-id');
        var str=`       <table class="table table-hover table-bordered" id="sampleTable">
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
                              <?php 
                                $results = dbQuery("SELECT * FROM blog_admin where access_control='user' and control='0'");
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
                                        <button class="btn btn-warning" onclick="submit('adduser','<?php echo $admin['ID']?>','`+ID+`')" >Add</button>
                                  </tr><?php          
                                }
                              ?>
                          </tbody>
                        </table>
              `;
        $('#model_view').html(str);
        $('#sampleTable').DataTable();
        $('#myModal2').modal('show');
    });

    $(document).on('click', '#view_users', function () {
        var ID=$(this).attr('data-id');
        $.ajax({
            url: "content_save.php",
            data : {
              ID:ID,
              from:"view_users",
            },
            type : 'POST',
            success: function(data){
              $('#model_view').html(data);
              $('#sampleTable').DataTable();
              $('#myModal2').modal('show');
            }
        });
    });


</script>
