
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty Staff Directory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="regd.js"></script>
   <style>
    body{
    background-image: url(images/3.jpg);
        
         
}

    </style>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Faculty Staff Directory</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
           <li><a href="index.html">Home</a></li>
        <li><a href="index.html#about">About</a></li>
        <li><a href="#">Contact Us</a></li>
         <li><a href="logout.php">LogOut</a></li>
          <li><a href="profile.php"> My Profile</a></li>
        
      </ul>
    </div>
  </div>
</nav>
   <div class="container" style="margin-bottom: 50px">
            <form class="form-horizontal" role="form" method="post" action="add.php" enctype="multipart/form-data">
                <h3 align="center">Please Fill The Faculty/Staff Details</h3 >
                 <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                        <select id="firstName" placeholder="Enter the Title" name="title" class="form-control" autofocus>
                           <option>Mr.</option>
                             <option>Dr.</option>
                             <option>Ms.</option>
                             
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="first_name" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="designation" class="col-sm-3 control-label">Designation</label>
                    <div class="col-sm-9">
                        <input type="text" id="designation" name="designation" placeholder="Designation" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="department" class="col-sm-3 control-label">Area</label>
                    <div class="col-sm-9">
                        <input type="text" id="department" name="department" placeholder="Area" class="form-control" autofocus>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="designation" class="col-sm-3 control-label">Affilation</label>
                    <div class="col-sm-9">
                        <input type="text" id="designation" name="institute" placeholder="Affilation" class="form-control" autofocus>
                    </div>
                </div>
                     
                
                
             
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" name="email" class="form-control" name= "email">
                    </div>
                </div>
                
                
                 <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phone" name="phone" placeholder="Phone number" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="image" class="col-sm-3 control-label">Upload Photo </label>
                    <div class="col-sm-9">
                       <input type="file" id="image1" name="image" class="form-control" style="padding-bottom: 40px;">
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
            </form> <!-- /form -->
        </div> 
    <?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faculty";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
              $title=$_POST['title'];
              $name=$_POST['first_name'];
              $designation=$_POST['designation'];
              $department=$_POST['department'];
              $institution=$_POST['institute'];
              $email=$_POST['email'];
              $phone=$_POST['phone'];
                 /*$image=$_FILES["image1"]["name"];
                $imagetmp=base64_encode(file_get_contents($_FILES["image1"]["tmp_name"]));
    $imgdata='data:image/jpeg;base64,'.$imagetmp;
    $imgdata=$_FILES['image'];*/
    
        /*Image upload function startes here*/
                       
            $statusMsg = '';

// File upload path
       $targetDir = "uploads/";
       $fileName = basename($_FILES["image"]["name"]);
      $targetFilePath = $targetDir . $fileName;
      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

         if(!empty($_FILES["image"]["name"])){
    // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg');
        if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
           
             $sql="INSERT into faculty_people (title,first_name,designation,department,Institute,email,phone,imagename) VALUES                         ('$title','$name','$designation','$department','$institution','$email',$phone,'$fileName')";
                    
           if ($conn->query($sql) === TRUE) {
            echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
               header("location: index.php");
               exit();
                }               
            else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
             }

        
        }
        
        else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message




$conn->close();
}
?>
    
    
<div class="footer">
 <p>Copyright © AAC. All Rights
Reserved and Contact Us: +91 90000 00000</p>
</div>

</body>
</html>

