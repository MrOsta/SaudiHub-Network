<?php

/*
Coding By: @Official_Osta - RealName: Yaqub Abdullah


الموقع ليس مفتوح المصدر ، يرجى عدم نشر اي ملف في الموقع في أي مكان!


#######  #####  #######    # 
#     # #     #    #      # #
#     # #          #     #   #
#     #  #####     #    #     #
#     #       #    #    #######
#     # #     #    #    #     #
#######  #####     #    #     #




*/

?><?php
session_start();
if (!isset($_SESSION['s_username']) AND !isset($_SESSION['s_password']))
{
  echo "<script>Only Registers!<?script>";
  sleep(1);
  header("location: register.php");
}
else
{}
?>
<?php



$pagecolor = '';

if (isset($_POST['change_color'])) {
    $pagecolor = $_POST['colorpage'];
    setcookie('color-background', $pagecolor, time() + 36000, '/'); 
}else{
    if(isset($_COOKIE['color-background'])){
        $pagecolor = $_COOKIE['color-background'];
    } else{
        $pagecolor  = '#fff';
    }
}


$textcolor = '';

if (isset($_POST['change_colort'])) {
    $textcolor = $_POST['colortext'];
    setcookie('color-text', $textcolor, time() + 36000, '/'); 
}else{
    if(isset($_COOKIE['color-text'])){
        $textcolor = $_COOKIE['color-text'];
    } else{
        $textcolor  = '#000';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SaudiHub Network</title>
<link rel="shortcut icon" type="img/x-icon" href="img_uploads/saudi_icon.png" />

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/shop-homepage.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">

    </head><style>
    
    * {font-family: 'Changa', sans-serif;
}
    
    </style>
<body style="background-color: <?php echo $pagecolor;?>; color: <?php echo $textcolor?>">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        
        
      <a class="navbar-brand" href="#">Welcome, <?php echo $_SESSION['s_username'];
          ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
                  <li class="nav-item">

                              <a class="nav-link" href="howtouse.php" style="color:#4F8BC4">كيفية الإستخدام </a>

          <li class="nav-item">

            <a class="nav-link" style="color:red;"href="logout.php">تسجيل خروج</a>          </li>
      
          <li class="nav-item">

            <a class="nav-link" style="color:gray;"href="myposts.php">منشوراتي</a>          </li>

        </ul>
            

      </div>
    </div>
  </nav>
<br>  <p class="text-center">Welcome To SaudiHub Network, Hope you liked it❤️  <hr>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">SaudiHub Network </h1>
<hr>
       <h3> ما هذه الشبكة؟ </h3>
        <p> شبكة سعودي هوب هي شبكة إجتماعية والآن هي بنسختها التجريبية تم تصميمها وبرمجتها الطالب يعقوب عبدالله الربيعان  فكرتها جمع المشاريع المفتوحة-المصدر ومشاركتها مع الجميع , واطمح بتطويرها مستقبلاً</p>
<hr>
        <div class="list-group">
          <a href="#" class="list-group-item"> عدد المسجلين في الموقع : 
<?php
 $dbname = 'epiz_24530482_mbase';




// connection database 

  $connectdb = mysqli_connect("الهوست الخاص بقاعدة البيانات","اسم مدير قاعدة البيانات","باسورد قاعدة البيانات");
	$db = mysqli_select_db($connectdb,$dbname);

$query = mysqli_query($connectdb,"SELECT * FROM users");

$rows = mysqli_num_rows($query);
              echo $rows;
mysqli_close($connectdb);
?>
</a>
          
          <a href="#" class="list-group-item"><?php

echo "تاريخ اليوم بالميلادي هو : ". date("Y/m/d");
?></a>
        </div>
<form method="post" action="">
    <div><hr>

<h3>لون خلفية الصفحة</h3><br>
<input type="color" name="colorpage"/>
<br><br>
<input type="submit" name="change_color" value="تغيير"/>
        <hr>

<h3>لون خط الصفحة </h3><br>
<input type="color" name="colortext"/>
<br><br>
<input type="submit" name="change_colort" value="تغيير"/>
</div>
    </form>   </div>

      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

       
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img_uploads/home_bg.png" width="950" height="350" alt="First slide">
           
                 </div>
        </div>
        <hr>
<hr>
          <h3><a href="add.php"><button type="button" class="btn btn-success">اضافة برنامج</button></a> || جميع البرامج المفتوحة المصدر  </h3>
<br>
          
           <div class="header">

           <div class="container">
     
<div class="row">
          
          <?php
         $dbname = 'epiz_24530482_mbase';




// connection database 

  $connectdb = mysqli_connect("الهوست الخاص بقاعدة البيانات","اسم مدير قاعدة البيانات","باسورد قاعدة البيانات");

  

	$db = mysqli_select_db($connectdb,$dbname);
          
    
                  $query = "select * from posts";
$result = mysqli_query($connectdb,$query);
while($row = mysqli_fetch_array($result)) {
    $postname = $row['postname']; 
    $postdisc = $row['postdisc']; 
    $postimage = $row['postimage']; 
    $postfile = $row['post_file']; 
    
$postid = $row['postid']; 

          
          $nsql = "select users.name from posts inner join users on posts.id = users.id WHERE posts.postid = $postid";
$result1 = mysqli_query($connectdb,$nsql);
while($row = mysqli_fetch_array($result1)) {
    $username = $row['name']; 
}
       
    echo'
             

          <div style="color:black" class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">';
    echo"
              <img class='card-img-top' src='img_uploads/".$postimage."' width='50' height='250'>
             ";
    echo'
             <div class="card-body">
                <h4 class="card-title">
                  <a href="#">'.$postname.'</a>
                </h4>
                <p class="card-text">'.$postdisc.'</p>
                
</p>';
    echo  "

<a href='projects/".$postfile."' download><button type='button' class='btn btn-success'>تحميل المشروع</button></a>
";
        echo '
        </div>
              <div class="card-footer">
                <small class="text-muted">User: <b>'.$username.'</b></small>
              </div>
            </div>
          </div>

    ';

}
          ?>
    </div>
    </div>
    </div>
      <!-- /.col-lg-9 -->
        </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; <br>SaudiHub Network,
Made By: Yaqub Abdullah Alrubiaan</p>
    </div>
    <!-- /.container -->
  </footer>
    </body>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
