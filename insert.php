<?php

//insert.php

if(isset($_POST["image"]))
{
 /*include('database_connection.php');*/
 /*require_once('Rapid/required/database.php');*/
  require_once('Rapid/required/settings.php');
  require_once('Rapid/required/database.php');

 $data = $_POST["image"];

 $image_array_1 = explode(";", $data);

 $image_array_2 = explode(",", $image_array_1[1]);

 $data = base64_decode($image_array_2[1]);

 $imageName = time() . '.png';

 file_put_contents($imageName, $data);

 $image_file = addslashes(file_get_contents($imageName));

 $query = "INSERT INTO blog_images(images) VALUES ('".$image_file."')";

 $statement = $db->prepare($query);

 if($statement->execute())
 {
  echo 'Image save into database';
  unlink($imageName);
 }

}

?>
