<!-- จัดทำโดย นาย จีรศักดิ์ ผาลี 633410009-7 -->
<?php
// เชื่อมต่อฐานข้อมูล
require_once 'db_connect.php';

// ตรวจสอบว่ามีการส่งค่า id มาจากหน้าที่เรียกหรือไม่
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ส่งคำสั่ง SQL เพื่อลบข้อมูลรายงานที่มี id ตรงกับที่ระบุ
  $sql = "DELETE FROM reports WHERE id = $id";

  if (mysqli_query($conn, $sql)) {
    // ลบข้อมูลสำเร็จ กลับไปที่หน้า index.php
    header("Location: index.php");
    exit();
  } else {
    echo "เกิดข้อผิดพลาดในการลบข้อมูลรายงาน: " . mysqli_error($conn);
  }
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>
