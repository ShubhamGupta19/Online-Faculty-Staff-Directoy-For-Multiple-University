<?php
session_start();
if(!isset($_SESSION['username']))
{header('location:login-exec.php');
}
?>
<?php
$con=mysqli_connect("localhost","root","","faculty") or die("Couldn't Connect");
 $output=' ';
$row='';
?>
       

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty Staff Directory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>
    body{
    background-image: url(images/3.jpg);
        
       
}

    </style>

</head>
<body>
<!--Navigation Bar Start here-->
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
           <li class="active"><a href="#">Home</a></li>
        <li><a href="index.html#about">About</a></li>
        <li><a href="#">Contact Us</a></li>
          <li><a href="logout.php">LogOut</a></li>
          <li><a href="profile.php"> My Profile</a></li>
          <li><a href="add.php"><i class="fa fa-plus" style="font-size:20px"></i></a></li>
        <!--<li><a href="signup.html">Signup</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
      </ul>
    </div>
  </div>
</nav>
    <!--Navigation Bar Ends here-->

<div class="container">
   <h2 class="text-center" style="background-color:white"> welcome
       
       <?php echo $_SESSION['username'];
       
       ?> 
    </h2>
    
    <div class="container">
        <div class="static">
           <p style="color: white"> Search the faculty by Name or Department or Institute</p>
       </div>
         
        
       <div class="">
          <form action="index.php" method="post">
              <input type="text" name="search" placeholder="Type to search for faculty info" class="form-control form-control-lg"/>
              <input type="submit" class="btn btn-primary" value="Search" style="margin-left: 40%;position: relative;margin-top: 20px;">
   
       
              
           </form>
           
     </div>
    
    </div>
    <!--Search results starts here-->
    
    </div>
    
     <?php
       
if(isset($_POST['search']))
{
    $searchq=$_POST['search'];
    $searchq= preg_replace("#[^0-9a-z]#i","","$searchq");
    $query = mysqli_query($con,"select * from faculty_people where first_name LIKE '%$searchq%' or department LIKE '%$searchq%' or institute LIKE '%$searchq%'") or die("Couldn't Connect!!!!");
    $count=mysqli_num_rows($query);
    if($count==0)
    {
        $output='<h3 align="center">There Was No Results</h3>';
    } else{
               $output .='<h3>Search Results Are</h3><br> 
                              <div class="container "><div class="row">'
              ;
            
        while($row=mysqli_fetch_array($query))
        {  
              $imageURL = 'uploads/'.$row["imagename"];


           $output .= '
        
    
        <div class="col-xs-12 col-sm-6 col-md-6 nomarginonsmalldevice marginonlargedevice">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                    <img src="'.$imageURL.'" alt=""  height="50%" width="80%" />
                       
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                               '.$row["title"].' '.$row["first_name"].'</h4>
                       
                        <p>
                       
                            <i class="glyphicon glyphicon-user"></i>&nbsp&nbsp'.$row["designation"].'
                            <br />
                            <i class="glyphicon glyphicon-briefcase"></i>&nbsp&nbsp'.$row["department"].'
                            <br />
                            <i class="glyphicon glyphicon-envelope"></i>&nbsp&nbsp'.$row["email"].'
                            <br>
                             <i class=" glyphicon glyphicon-earphone"></i>&nbsp&nbsp'.$row["phone"].'
                             <br>
                              <i class="glyphicon glyphicon-education"></i>&nbsp&nbsp'.$row["Institute"].'
                            <br />
                            
                            <br />
                            
                             
                            
                            
                            
                            </p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      
   ' ;
            
        }
      /*  $output .= ' </div>';*/
        
    }
    print $output;
}
        
       
        ?>
    


    <br>

<div class="footer">
 <p>Copyright © AAC. All Rights
Reserved and Contact Us: +91 90000 00000</p>
</div>

</body>
</html>
