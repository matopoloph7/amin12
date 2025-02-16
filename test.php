<?php
$serverName = "DESKTOP-KMM5JM2\\MEFTAHNETDB"; // IP ماشین مجازی و نام نمونه SQL Server
$connectionOptions = array(
    "Database" => "master",  // نام دیتابیس
    "Uid" => "attcuser",         // نام کاربری
    "PWD" => "123asd!@#"         // رمز عبور
);

// ایجاد اتصال
$conn = sqlsrv_connect($serverName, $connectionOptions);

// بررسی اتصال
if ($conn === false) {
    die("اتصال ناموفق: " . print_r(sqlsrv_errors(), true));
} 
echo "اتصال موفق!";

// بستن اتصال
sqlsrv_close($conn);
?>
