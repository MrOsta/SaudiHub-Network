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

// NAME DATA BASE : mbase 
// NAME TABLE : users
$error = ""; // error variable
$done = ""; // error variable

if (isset($_POST['submit'])){

// check if empty or not
	if(empty($_POST['user']) || empty($_POST['pass'] || empty($_POST['email']))){

		$error = "حدث خطأ : يرجى التأكد من المدخلات";


	}

else{
// filter input - حماية من ثغرة XSS
function valid_input($data){

$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
//تعريف الإسم واضافة التحقق - Regular expression
	$user = valid_input($_POST['user']);
	if (!preg_match("/^[a-zA-Z 1-9 ]*$/",$user)){

		$error = "الإسم يكون بالحروف الإنجليزية فقط";
	}
    
	else{
		// تعريف الإيميل والتحقق

			$email = valid_input($_POST['email']);
// تحقق الإيميل
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error = "يرجى ادخال بريد الكتروني صحيح";
	}
	else{
$inputname = trim($user);
$inputemail = trim($email);
if(empty($inputname)|| empty($inputemail)){

 $error = "يرجى التأكد من المدخلات";   
    die("عذراً هنالك خطأ <a href='register.php'>رجوع</a>" );
	}
// اضافة كلمة المرور والتحقق من ان الكلمتي متطابقتا او لا
	$pass = valid_input($_POST['pass']);
	$pass2 = valid_input($_POST['pass2']);
	if ($pass != $pass2) { 
$error = "كلمتي المرور ليست متطابقتين!";

	}
else{
	// اضافة اسم قاعدة البيانات
	$dbname = 'اسم قاعدة البيانات';




// الإتصال بقاعدة البيانات - Mysql

	$connectdb = mysqli_connect("الهوست الخاص بقاعدة البيانات","اسم مدير قاعدة البيانات","باسورد قاعدة البيانات");

	$db = mysqli_select_db($connectdb,$dbname);



//التحقق من وجود تشابه بالمدخلات ام لا
$query = mysqli_query($connectdb,"SELECT * FROM users WHERE name='$user' OR email='$email'");

// يحسب عدد الصفوف 
$rows = mysqli_num_rows($query);
// اذ كانت عدد الصفوف صفر فلا يوجد حساب بنفس الإسم
if ($rows == 0){
	// إذا ارسل البيانات الى قاعدة البيانات
$sql = "INSERT INTO users (name,password,email) VALUES('$user','$pass','$email')";
// قم بتحول المتغير $sql الى query لقاعدة البيانات
$result = mysqli_query($connectdb,$sql);
// إذا كانت النتيجه - True | ارسل رسالة تم انشاء حساب
if ($result == 1){
	$done =  "تم إنشاء حساب <br>  <a href='login.php'>قم بتسجيل الدخول الآن</a>";
}

}// إن كانت غير ذلك لا ترسل واظهر هذه الرسالة

else{

	$error = "الإسم أو  البريد الإلكتروني مسجل مسبقاً" ;

}
// أقفل الإتصال , للآمان

mysqli_close($connectdb);
}
}}


}
}
?>
