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

if (!isset($_SESSION['s_password']) AND !isset($_SESSION['s_username']))
{
	include "config_login.php";

}
else{
	header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" type="img/x-icon" href="img_uploads/saudi_icon.png" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>تسجيل الدخول</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

<style>
  * {

    font-family: 'Cairo', sans-serif;

  }
    .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}

</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>

<body>

  

  <!-- Page Content -->
  <div class="container">
<br>  <p class="text-center">Welcome To SaudiHub Network, Hope you liked it❤️  <hr>

<center>
<br>
<img src="img_uploads/login_bg.png" width="950" height="450"/>
</center>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">قم بتسجيل الدخول , لتأخذ صلاحية دخول الموقع
      </a>
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
            <a class="navbar-brand" style="color:gray"; href="index.php">رجوع
      </a>
      </div>
    </div>
  </nav>

        <h1 class="my-4" style="text-align: center">سجل دخولك</h1>
        <HR> <p style="text-align: center;">أهلا بك في صفحة تسجيل الدخول </p>

    


    </div>
    <!-- /.row -->
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">تسجيل الدخول</h4>
    <p class="text-center">يمكنك التسجيل عبر: </p>
   <p class="divider-text">
        <span class="bg-light">SaudiHub Network</span>
    </p>

    <form method="post" action=""><h6 style="text-align: center;">إسم المستخدم  <span class="badge badge-warning">إجباري</span>
</h6>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="name" class="form-control" placeholder="إسم المستخدم" type="text">
    </div>
      <h6 style="text-align: center;">كلمة المرور   <span class="badge badge-warning">إجباري</span>
</h6>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" placeholder="كلمة المرور" name="password" type="password">
    </div> <!-- form-group// -->
     <!-- form-group// -->                                      <div class="alert alert-danger" role="alert">
<?php echo $error ?></div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" name="submit"value="Login | تسجيل دخول"> 
        
        
    </div> <!-- form-group// -->      
    <p class="text-center">ليس لديك حساب؟<a href="register.php">إنشاء حساب</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; SaudiHub Network, <br> Made By: Yaqub Abdullah Alrubiaan</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
