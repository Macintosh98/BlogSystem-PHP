<?php
session_start();
require_once('Rapid/required/settings.php');
require_once('Rapid/required/database.php');
$page=$_POST['from'];

if($page == "register_page")
{
        $username= $_POST["username"];
        $password= $_POST["password"];
        $name= $_POST["name"];
        $email= $_POST["email"];
        $mobile= $_POST["mobile"];
        $address= $_POST["address"];
        $access_control= $_POST["access_control"];

        $sql="INSERT INTO blog_admin(access_control,username,password,name,email,mobile,address) VALUES ('$access_control','$username','$password','$name','$email','$mobile','$address')";
        if( dbQuery($sql) ) echo "correct";
}
else if($page == "viewpost_page")
{
        $access_control=$_SESSION['access_control'];
        $admin_name=$_SESSION['admin_name'];
        $str=$_REQUEST['filtertable'];
        $where="";
        if(!empty($str)){
          $where='where';
        }
        if($access_control=='user'){
                if(!empty($str)){
                        $str+='and';
                      }
                $sql="SELECT * FROM blog where Publisher='$admin_name' $str";  
        }
        else{
                $sql="SELECT * FROM blog $where $str";
        }
        $result = dbQuery($sql);
        $array = dbFetchAll($result);
        echo json_encode($array);
}
else if($page == "addpost_page")
{
        $domain=$_POST['domain'];
        $category= $_POST["category"];
        $pagename= $_POST["pagename"];
        $meta_dis=$_POST['meta_dis'];
        $meta_key=$_POST['meta_key'];
        $title= $_POST["title"];
        $publisher= $_SESSION['admin_name'];
        $contents= $_POST["contents"];      
        $admin=$_SESSION['active_admin'];
        $image_ID=$_POST['image_ID'];


        $sql="INSERT INTO blog(Domain_ID,Admin_ID,Category,Page_Name,Title,Meta_Description,Meta_Keywords,Publisher,Contents,Home_Image) VALUES ('$domain','$admin','$category','$pagename','$title','$meta_dis','$meta_key','$publisher','$contents','$image_ID')";
        
        if( dbQuery($sql) )
        {
                echo "correct";
        }

}
else if($page == "updatepost_page")
{
        $ID=$_POST['ID'];
        $domain=$_POST['domain'];
        $category= $_POST["category"];
        $pagename= $_POST["pagename"];
        $title= $_POST["title"];
        $contents= $_POST["contents"];


        $sql="UPDATE blog SET Domain_ID='$domain' , Category='$category' , Page_Name='$pagename' , Title='$title' , Contents='$contents' WHERE Blog_ID='$ID'";
        if( dbQuery($sql) ) echo "correct";
}
else if($page == "addpost_video")
{
        $video_link= $_POST["video"];

        $sql="INSERT INTO blog_video(Video_Name) VALUES ('$video_link')";
        if( dbQuery($sql) ) echo "correct";
}
else if($page == "addpost_image")
{    
         $data = $_POST["image"];
        
         $image_array_1 = explode(";", $data);
        
         $image_array_2 = explode(",", $image_array_1[1]);
        
         $data = base64_decode($image_array_2[1]);
        
         $imageName = time() . '.png';
        
         file_put_contents($imageName, $data);
        
         $image_file = addslashes(file_get_contents($imageName));
        
         $query = "INSERT INTO blog(Home_Image) VALUES ('".$image_file."')";
        
         $statement = $db->prepare($query);
        
         if($statement->execute())
         {
          echo 'Image save into database';
          unlink($imageName);
         }
}
else if($page == "view")
{
        $ID=$_POST['ID'];

        $sql="SELECT Contents FROM `blog` WHERE Blog_ID='$ID'";
        if( $result = dbQuery($sql) )
        {
                $row = $result->fetch_assoc();
                echo $row['Contents'];
        }
}
else if($page == "publish")
{
        $ID=$_POST['ID'];

        $sql="UPDATE blog SET Publish_Status='1' WHERE Blog_ID='$ID'";
        if( dbQuery($sql) ) echo "correct";
}
else if($page == "delete")
{
        $ID=$_POST['ID'];

        $sql="UPDATE blog SET Publish_Status='2' WHERE Blog_ID='$ID'";
        if( dbQuery($sql) ) echo "correct";
}
else if($page == "adduser_page")
{
        $aID=$_POST['admin'];
        $uID=$_POST['user'];

        $sql="UPDATE blog_admin SET control='$aID' WHERE ID='$uID'";
        if( dbQuery($sql) ) echo "correct";
}
else if($page == "view_users")
{
        $ID=$_POST['ID'];

        ?>

                        <table class="table table-hover table-bordered" id="sampleTable">
                          <thead>
                            <tr>
                              <th>UserName</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>Address</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php 
                                $results = dbQuery("SELECT * FROM blog_admin where access_control='user' and control='$ID'");
                                $admins=dbFetchAll($results);
                                //print_r( $results);
                                foreach ($admins as $admin) {
                                  ?><tr>
                                      <td><?php echo $admin['username']?></td>
                                      <td><?php echo $admin['name']?></td>
                                      <td><?php echo $admin['email']?></td>
                                      <td><?php echo $admin['mobile']?></td>
                                      <td><?php echo $admin['address']?></td>
                                  </tr><?php          
                                }
                              ?>
                          </tbody>
                        </table>      
        <?php
}
?>
