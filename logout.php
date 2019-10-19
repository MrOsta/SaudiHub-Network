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

session_unset($_SESSION['s_username']);
session_unset($_SESSION['s_password']);
session_destroy();

header('location: register.php');




?>