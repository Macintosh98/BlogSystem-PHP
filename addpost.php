<?php
require "Rapid/required/settings.php";
require "Rapid/required/database.php";
if (isset($_POST['ID']))
{
      $edit_ID=$_POST['ID'];
      $sql="SELECT * FROM `blog` WHERE Blog_ID='$edit_ID'";
      if( $result = dbQuery($sql) )
      {
              $row = $result->fetch_assoc();
              $edit_domain = $row['Domain_ID'];
              $edit_category = $row['Category'];
              $edit_pagename = $row['Page_Name'];
              $edit_title = $row['Title'];
              $edit_meta_dis = $row['Meta_Description'];
              $edit_meta_key = $row['Meta_Keywords'];
              $edit_contents = $row['Contents'];
      }
}
?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Add Post's</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    </ul>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-12"> 
      <div class="tile" style="height:auto">
        <div class="tile-body">
            <div class="bs-component">
              <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#containts">Containts</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#image">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#video">Video</a></li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="containts"><hr>
                  <!-- <div class="input-group mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="Home_image" id="Home_image" accept="image/*">
                      <label class="custom-file-label" for="inputGroupFile02">Select Home Image</label>
                    </div>
                  </div>  -->
                  <div class="form-group">
                    <label class="control-label">Home Image</label>
                    <input class="form-control" type="text" id="Home_Image" placeholder="Enter Home Image" value="<?php if(isset($edit_Home_Image)) { echo $edit_Home_Image; } ?>" onkeyup="doCheck('Home_Image');">
                  </div>
                  <div class="form-group">
                    <div id="editor">
                      <div id='edit' style="margin-top: 30px;">
                        <?php if(isset($edit_contents)) { echo $edit_contents; } ?>
                      </div>
                      <div id="preview" class="fr-view" hidden></div>
                    </div>
                    <div><br>
                    <div class="bs-component">
                      <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="success_bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label">Domain</label>
                    <select class="form-control" id="domain">
                      <?php
                          $results = dbQuery("SELECT * FROM blog_domain where Status='1'");
                          foreach ($results as $domain) { 
                            if(isset($edit_domain)) { 
                              if($edit_domain==$domain['ID']) {?> 
                                <option value="<?php echo $domain['ID']; ?>"><?php echo $domain['Domain_Name']; ?></option> 
                              <?php }
                                                          else { ?>
                                                            <option value="<?php echo $domain['ID']; ?>"><?php echo $domain['Domain_Name']; ?></option>
                                                          <?php }
                            }
                            else{?>
                              <option value="<?php echo $domain['ID']; ?>"><?php echo $domain['Domain_Name']; ?></option>
                          <?php }

                          }?>
                    </select>
                  </div> 
                  
                  <div class="form-group">
                    <label class="control-label">Category</label>
                    <select class="form-control" id="category">
                    <?php
                    $results = dbQuery("SELECT * FROM blog_category");
                        foreach ($results as $category) {
                          if(isset($edit_category)) { 
                            if($edit_category==$category['ID']) {?> 
                              <option value="<?php echo $category['ID']; ?>"><?php echo $category['name']; ?></option>
                            <?php }
                                                       else{?>
                                                        <option value="<?php echo $category['ID']; ?>"><?php echo $category['name']; ?></option>
                                                    <?php }
                          }
                          else{?>
                            <option value="<?php echo $category['ID']; ?>"><?php echo $category['name']; ?></option>
                        <?php }

                    }?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="control-label">Slug</label>
                    <input class="form-control" type="text" id="pagename" placeholder="Enter Page Name" value="<?php if(isset($edit_pagename)) { echo $edit_pagename; } ?>" onkeyup="doCheck('pagename');">
                  </div>

                  <div class="form-group">
                    <label class="control-label">SEO Title</label>
                    <input class="form-control" type="text" id="title" placeholder="Enter Full Title" value="<?php if(isset($edit_title)) { echo $edit_title; } ?>" onkeyup="doCheck('title');">
                  </div> 

                  <div class="form-group">
                    <label class="control-label">Meta Description</label>
                    <input class="form-control" type="text" id="meta_dis" placeholder="Enter Meta Description" value="<?php if(isset($edit_meta_dis)) { echo $edit_meta_dis; } ?>" onkeyup="doCheck('meta_dis');">
                  </div> 
                  <div class="bs-component">
                      <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="meta_dis_success_bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
                  <br>

                  <div class="form-group">
                    <label class="control-label">Meta Keywords</label>
                    <input class="form-control" type="text" id="meta_key" placeholder="Enter Meta Keywords" value="<?php if(isset($edit_meta_key)) { echo $edit_meta_key; } ?>" onkeyup="doCheck('meta_key');">
                  </div>
                  <div class="bs-component">
                      <div class="progress mb-2">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="meta_dis_success_bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
                  <br> 

                  <div>
                    <?php if(isset($edit_ID)) { ?>
                      <button class="btn btn-primary" type="button" onclick="submit('post_update','<?php echo $edit_ID; ?>')"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                    <?php }
                    else {?>
                      <button class="btn btn-primary" type="button" onclick="submit('post')"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
                    <?php }?>
                  </div>
                </div>
                <div class="tab-pane fade" id="image">
 
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="insert_image" id="insert_image" accept="image/*">
                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                  </div>
                </div>

                  <div class="container">
                    <div class="gallery"> 
                      <div id="store_image"></div>
                    </div>
                  </div>  
                  <!-- Content Row -->         

                  <!-- Page Content -->
                  <!-- <div class="container">

                  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Thumbnail Gallery</h1>

                  <hr class="mt-2 mb-5">

                  <div class="row text-center text-lg-left">

                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
                          </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
                          </a>
                    </div>
                  </div>

                  </div> -->
                  <!-- /.container -->


                      

                </div>               
                <div class="tab-pane fade" id="video">
                  <div class="form-group">
                    <label class="control-label">video</label>
                    <input class="form-control" type="text" name="video_link" id="video_link" placeholder="Enter Video Link">
                    <button class="btn btn-primary" type="button" onclick="submit('video')"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
                  </div>
                </div>
              </div>
            </div>            
        </div>
        <!-- <div class="tile-footer">
        
        </div> -->
      </div>
    </div>
  </div>
</main>
<script>
$('#category').select2();
$('#domain').select2();
var editor=new FroalaEditor('#edit', {
    enter: FroalaEditor.ENTER_P,
    events: {
      initialized: function () {
        const editor = this
        document.getElementById('preview').innerHTML = editor.html.get()
        $('#success_bar').css({"width": "1%"});
      },
      contentChanged: function () {
        const editor = this
        document.getElementById('preview').innerHTML = editor.html.get()
        var n=editor.html.get().length;
        console.log(n);
        $('#success_bar').css({"width": "5%"});
        if(n>100)
        $('#success_bar').css({"width": "10%"});
        if(n>200)
        $('#success_bar').css({"width": "20%"});
        if(n>300)
        $('#success_bar').css({"width": "30%"});
        if(n>400)
        $('#success_bar').css({"width": "40%"});
        if(n>500)
        $('#success_bar').css({"width": "50%"});
        if(n>600)
        $('#success_bar').css({"width": "60%"});
        if(n>700)
        $('#success_bar').css({"width": "70%"});
        if(n>800)
        $('#success_bar').css({"width": "80%"});
        if(n>900)
        $('#success_bar').css({"width": "90%"});
        if(n>1000)
        $('#success_bar').css({"width": "100%"});
      }
    }
});
//editor.opts.height = 500;


$(document).ready(function(){

if(!$('#image_demo').data('croppie'))
{
$image_crop = $('#image_demo').croppie({
   enableExif: false,
   viewport: {
     width:200,
     height:200,
     type:'square' //circle
   },
   boundary:{
     width:300,
     height:300
   }    
 });



 $('.crop_image').click(function(event){
   $image_crop.croppie('result', {
     type: 'canvas',
     size: 'viewport'
   }).then(function(response){
     $.ajax({
       url:'insert.php',
       type:'POST',
       data:{"image":response},
       success:function(data){
         $('#insertimageModal').modal('hide');
         load_images();
         alert(data);
       }
     })
    //  $.ajax({
    //    type: "POST",
    //    url:'content_save.php',
    //    data:{
    //      from:"addpost_image",
    //      image:response
    //      },
    //    success:function(data){
    //      $('#insertimageModal').modal('hide');
    //      load_images();
    //      alert(data);
    //    }
    //  })
   });
 });

}
$('#insert_image').on('change', function(){
   var reader = new FileReader();
   reader.onload = function (event) {
     $image_crop.croppie('bind', {
       url: event.target.result
     }).then(function(){
       console.log('jQuery bind complete');
     });
   }
   reader.readAsDataURL(this.files[0]);
   $('#insertimageModal').modal('show');
 });
//  $('#Home_image').on('change', function(){
//    var reader = new FileReader();
//    reader.onload = function (event) {
//      $image_crop.croppie('bind', {
//        url: event.target.result
//      }).then(function(){
//        console.log('jQuery bind complete');
//      });
//    }
//    reader.readAsDataURL(this.files[0]);
//    $('#insertimageModal').modal('show');
//  });

 load_images();

 function load_images()
 {
   $.ajax({
     url:"fetch_images.php",
     success:function(data)
     {
       $('#store_image').html(data);
     }
   })
 }



});  

</script>
