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

<title>كيفية الاستعمال</title>
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
        
        
      <a class="navbar-brand" href="#">كيفية إستخدام الشبكة؟
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        
          <li class="nav-item">

            <a class="nav-link" style="color:red;"href="logout.php"></a>          </li>
      
          <li class="nav-item">

            <a class="nav-link" style="color:gray;"href="index.php">إضغط هنا للرجوع</a>          </li>
      
        </ul>
      </div>
    </div>
  </nav>
<br>  <p class="text-center">Welcome To SaudiHub Network, Hope you liked it❤️  <hr>
    
        <hr>
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
    </form>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

       
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img_uploads/howtouse_bg.png" width="950" height="350" alt="First slide">
           
                 </div>
        </div>
        <hr>
        
          <h3>كيفية إستخدام المنصة؟ <a href="add.php"></a></h3>
<hr>
          <h2>SaudiHub Network </h2>
    <hr>
<span>بسم الله الرحمن الرحيم ، السلام عليكم ورحمة الله وبركاته اشكرك لتطوعك وإستخدامك المنصة وأشكرك ايضاً لإهتمامك</span><br>
<hr>
<p>أولاً قبل كُل شيء يجب ان تعرف ان منصتي ليست مكتمله وإنها الآن هي نسخة تجريبية <br>
          </p>
          <hr>
<h4>أولاً: كيف أدخل المنصة؟</h4>
<p>لدخول المنصة يجب أن تنشئ حساب ومن ثم تسجل دخولك</p>
<br>
          <div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/St339AjtUVFGpk3YmY" width="50%" height="50%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                    <hr>
<h4>ثانياً: كيف اُشارك مشروعي؟</h4>
          <h6>1 - أول خطوة</h6>
<p>لنشر مشروعك يجب ان يكون لديك ملفات المشروع وايضا <br>
يجب ان تضع الملفات في ملف مضغوط 
<br> <b>ZIP</b><br>
وايضا صورة المشروع يجب ان تكون <b>JPG</b></p>
<br>
          <div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/VGE1puiB9D4WcLYWue" width="50%" height="50%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>          <h6>2 - ثاني خطوة</h6><p>اذهب الى الصفحة الرئيسية ومن ثم اضغط على إضافة <br> ومن بعدها اضف معلومات المشروع</p>
          <div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/Ll2ZI9Q6ZMK5S0wSZo" width="50%" height="50%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
          <h6>شكرا لك لإهتمامك في استخدام شبكة سعودي هوب واتمنى لك التوفيق :)</h6>
- Yaqub Abdullah Alrubiaan
           <div class="header">

           <div class="container">
     
<div class="row">
           
    
             
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
