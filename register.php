<main class="app-content">
    <div class="row justify-content-center">
        <div class="col-md-6"> 
          <div class="tile">
            <h3 class="tile-title">Register</h3><hr>
            <div class="tile-body">
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
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="button" onclick="submit()"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearix"></div>
    </div>
</div>
<script>
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
 }

function submit() {
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
          posts('register.php')
          swal("Register Sucssesfully!", "Your post has been Save sucssesfully.", "success");
        }else{
          swal("Not Saved!", "Your post has been not Save sucssesfully.", "error");
        }
      }
  });
}
</script>