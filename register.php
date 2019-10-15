<?php

/*
Coding By: @Official_Osta - RealName: Yaqub Abdullah



#######  #####  #######    # 
#     # #     #    #      # #
#     # #          #     #   #
#     #  #####     #    #     #
#     #       #    #    #######
#     # #     #    #    #     #
#######  #####     #    #     #


*/

?>

<?php
	session_start();

if (!isset($_SESSION['s_password']) AND !isset($_SESSION['s_username']))
{
	include "config.php";

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

  <title> إنشاء حساب</title>

  <!-- Bootstrap core CSS -->
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
<br>  <p class="text-center">SaudiHub | شبكة مشاركة المشاريع المفتوحة-المصدر  <hr><br>

 
    




  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="login.php">تسجيل الدخول
      </a>
     
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="navbar-brand" href="howtouse.php" style="color:#4F8BC4">كيفية الإستخدام     </a>
     
      </div>
    </div>
  </nav>
      
    


    </div>
    <!-- /.row -->
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">أنشئ حسابك</h4>
   
    <p class="divider-text">
        <span class="bg-light">SaudiHub Network</span>
    </p>

    <div class="alert alert-warning" role="alert">
ملاحظة : لاتقم بمشاركة معلوماتك الخاصة لأي أحد , حرصاً لسلامتها ، ولا تستخدم معلومات قمت بإستخدامها في موقع اخر 
</div>
<!--  User Name-->
    <form method="post" action=""><h6 style="text-align: center;">إسمك  - الإسم المستعار <span class="badge badge-warning">إجباري</span>
</h6>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input class="form-control"type="name" name="user" placeholder="إسم المستخدم" required>
    </div> <!--  Email-->
<h6 style="text-align: center;">بريدك الإلكتروني <span class="badge badge-warning">إجباري</span>
</h6>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input class="form-control"type="email" name="email" placeholder="البريد الإلكتروني" required>
    </div><!--  Password -->

    <!-- Password-->
      <h6 style="text-align: center;">كلمة المرور <span class="badge badge-warning">إجباري</span>
</h6>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" type="password" name="pass" placeholder="إنشاء كلمة مرور" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" type="password" name="pass2" placeholder="كلمة المرور مرة اخرى" required>
    </div> <!-- form-group// -->                                      
    <div class="form-group"><div class="alert alert-danger" role="alert">
        <?php
echo $error;
?>
</div>
        <div class="alert alert-success" role="alert">
<?php 
echo $done ?></div>
      <input type="submit" name="submit" class="btn btn-primary btn-block" value="Register | انشاء حساب">
    </div> <!-- form-group// -->      
    <p class="text-center">لديك حساب؟ <a href="login.php">تسجيل دخول</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Saudi Hub , <br> Made By: Yaqub Abdullah Alrubiaan</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
