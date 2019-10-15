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
$error = "";

if(isset($_POST['submit'])){
    
    
    // filtering XSS ازالة ثغرة اكس اس اس
    function check_input($data){
$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);       
        return $data;
    }
    // تحقق من عدم وجود فراغات في الاسم او إنه فاضي
$inputname = trim($_POST['pname']);
if(empty($inputname)|| empty($_POST['ptext'] || empty($_POST['pimage']  ))){

 $error = "يرجى التأكد من المدخلات";   

	}
    else {
        
        // variables
        $id = $_SESSION['s_id'];
        $pname = check_input($_POST['pname']);
        $pdisc = check_input($_POST['ptext']);
        
        $imagename = rand(1000,10000)."-".$_FILES["pimage"]["name"]; 
        $imagesize = $_FILES["pimage"]["size"]; 
$imagetmp = $_FILES["pimage"]["tmp_name"];
$target_dir = "img_uploads/";     
        

                                move_uploaded_file($imagetmp,$target_dir.$imagename);

        
        $allowed =  array('gif','png','jpg');
$ext = pathinfo($imagename, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) ) {
    die("هنالك خطأ الرجاء المحاولة مرة اخرى. , <a href='index.php'>رجوع</a> ");}
    if ($imagesize > 60000000){
die("هنالك خطأ الرجاء المحاولة مرة اخرى. , <a href='index.php'>رجوع</a> ");
    }
        
        $filename = rand(1000,10000)."-".$_FILES["pfile"]["name"];
        $filesize = rand(1000,10000)."-".$_FILES["pfile"]["name"];
        $file_dir = "projects/";     
        $filetmp = $_FILES["pfile"]["tmp_name"];
        
                                        move_uploaded_file($filetmp,$file_dir.$filename);
   $allowedfile =  array('zip','txt');
$extfile = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($extfile,$allowedfile) ) {
    
die("هنالك خطأ الرجاء المحاولة مرة اخرى. , <a href='index.php'>رجوع</a> <br> ERROR:D1 ");}
    if ($imagesize > 60000000){
die("هنالك خطأ الرجاء المحاولة مرة اخرى. , <a href='index.php'>رجوع</a> <br> ERROR:D2");
    }     

        
       
        // input image name : pimage
        // input file name : pfile
        
        
    

    

     // connect data base
        	  $dbname = 'epiz_24530482_mbase';




// connection database 

  $connectdb = mysqli_connect("الهوست الخاص بقاعدة البيانات","اسم مدير قاعدة البيانات","باسورد قاعدة البيانات");
	$db = mysqli_select_db($connectdb,$dbname);


        
        // insert
        $sql = "insert into posts (postname,postdisc,postimage,post_file,id)values('$pname','$pdisc','$imagename','$filename',$id)";

        $result = mysqli_query($connectdb,$sql);
        if ($result == 1){
            sleep(1);
            $error = "تم الإرسال بنجاح";
            sleep(1);
            $error = "جاري تحويلك الى الصفحة الرئيسية";
                        sleep(1);
            header("location:index.php");
        }else{
            $error = "هنالك خطأ الرجاء المحاولة مرة اخرى";
        }
        }
    }
   
    
    
    
    


else{
}




?>
