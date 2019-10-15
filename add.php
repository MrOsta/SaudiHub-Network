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

?><?php
	session_start();

if (!isset($_SESSION['s_password']) AND !isset($_SESSION['s_username']) AND !isset($_SESSION['s_id']))
{
  header("location: register.php");


}else{
    
    include "adding.php";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add A Program</title>

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

  

  <div class="container">
<br>  <p class="text-center">Welcome To SaudiHub Network, Hope you liked it❤️  <hr>





  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">صفحة ارسال المشروع
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        
      </div>
    </div>
  </nav>


        <h1 class="my-4" style="text-align: center">أضف مشروعك في الموقع</h1>
        <hr/> <p style="text-align: center;"><br>أهلا وسهلا بك ، يمكنك من هنا نشر مشروعك ومشاركته مع الجميع! </p>
      


    </div>
    <!-- /.row -->
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">إضافة المشروع</h4>
    <p class="text-center"></p>
   
    <p class="divider-text">
        <span class="bg-light">SaudiHub Network</span>
    </p>

    <form method="post" action="" enctype="multipart/form-data" ><h6 style="text-align: center;">إسم المشروع <span class="badge badge-warning">إجباري</span>
</h6>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-text"></i> </span>
         </div>
        
    
        <!-- pname -->
            
        <input name="pname" class="form-control" placeholder="إسم المشروع" type="text" required>
    
        
        </div>
        
      <h6 style="text-align: center;">وصف المشروع <span class="badge badge-warning">إجباري</span>
</h6>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-"></i> </span>
        </div>
        
        
            <textarea name="ptext" class = "form-control" rows = "3" placeholder = "وصف المشروع , ما فكرة المشروع؟ " required>
</textarea>  </div>
   <!-- form-group// --><hr>
 <div class="form-group input-group">
       
     <center> صورة المشروع (JPG ONLY) </center><br><br><input type="file" name="pimage" required>
<br>

    </div> <hr><center>
                        ملف المشروع (ZIP ONLY) </center> <br> <input type="file" name="pfile">
<br>
        <hr>
        <a href="howtouse.php">
<p style"color:green">كيف انشر مشروعي في صيغة ZIP?</p>
</a>
            
        <br>
<?php echo $error;
       ;
        ?>
<br>
    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" name="submit"value="نشر"> 
        
        
        </div> <!-- form-group// -->                                             
</form>
</article>
<div>
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
