<div class="row">
<?php

 require_once('Rapid/required/settings.php');
 require_once('Rapid/required/database.php');
$query = dbFetchAll(dbQuery("SELECT * FROM blog_images"));
$output='';

 foreach($query as $r)
 {
    $output .= '
    <div class="col-md-3 mb-5">
    <div class="card text-white bg-primary h-100">
        
      <div class="card-body">
        <p class="card-text"><img src="data:image/png;base64,'.base64_encode($r['images']).'" class="img-thumbnail" /></p>
      </div>
      <div class="card-footer text-center">
        <a id="copy" data-id="'.$r['image_id'].'" class="btn btn-primary btn-sm">'.$r['image_id'].'</a>
      </div>
    </div>
  </div>
';
 }

echo $output;

?>
</div>
