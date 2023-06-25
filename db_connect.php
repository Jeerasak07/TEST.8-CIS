<!-- จัดทำโดย นาย จีรศักดิ์ ผาลี 633410009-7 -->
<?php
$host = 'localhost';
$db = 'datadb';
$username = 'root';
$password = '';

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
  die("เกิดข้อผิดพลาดในการเชื่อมต่อกับฐานข้อมูล: " . mysqli_connect_error());
}
?>