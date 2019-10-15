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
// login page
//
$error = ""; // error variable


// تحقق إن تم ضغط submit
if (isset($_POST['submit'])){

	// هل البيانات التي تم إعبائها في النموذج فارغة ام لا , وإن كانت فارغة فخزن البيانات في المتغير إيرور
	if(empty($_POST['name']) || empty($_POST['password'])){

		$error = "الإسم أو كلمة المرور خاطئة";


	}

	// إن كانت غير ذلك فا قم بتعريف المتغيرات

else{

$user = $_POST['name'];
$pass = $_POST['password'];
    $dbname = 'إسم قاعدة البيانات';




// الإتصال بقاعدة البيانات

	$dbconnect = mysqli_connect("الهوست الخاص بقاعدة البيانات","اسم مدير قاعدة البيانات","باسورد قاعدة البيانات");
$db = mysqli_select_db($dbconnect,$dbname);



// حدد الايدي الخاص باليوزر
 $id = "select id from users where password = '$pass' and name = '$user'";
$result1 = mysqli_query($dbconnect,$id);


// ادخل الايدي داخل مصفوفة
while($row = mysqli_fetch_array($result1)) {
    $id = $row['id']; 
}
// إخفاء التحذيرات , للآمان
    error_reporting(0);

    // حدد  المعلومات الخاصة باليوزر
$query = mysqli_query($dbconnect, "SELECT * FROM users WHERE password = '$pass' AND name = '$user' AND id = $id ");

$rows = mysqli_num_rows($query);

// إن كانت صحيحة:
if ($rows == 1){


$_SESSION['s_username'] = $user;
$_SESSION['s_password'] = $password;
$_SESSION['s_id'] = $id;

header("location:index.php");

}
// إن كانت غير ذلك :
else{

	$error = "الإسم أو كلمة المرور خاطئة";


}
// أقفل الأتصال للآمان
mysqli_close($dbconnect);
}
}
	?>
