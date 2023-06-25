<?php
session_start();
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // รับค่าจากฟอร์ม
  $swotAnalysis = $_POST['swot_analysis'];
  $strengths = $_POST['strengths'];
  $weaknesses = $_POST['weaknesses'];
  $opportunities = $_POST['opportunities'];
  $threats = $_POST['threats'];
  $touristAttractions = $_POST['tourist_attractions'];
  $economicCrops = $_POST['economic_crops'];
  $abundantResources = $_POST['abundant_resources'];
  $communityGroups = $_POST['community_groups'];
  $reporterName = $_POST['reporter_name'];
  $reportDate = $_POST['report_date'];

  // เตรียมคำสั่ง SQL สำหรับเพิ่มข้อมูลใหม่
  $sql = "INSERT INTO reports (swot_analysis, strengths, weaknesses, opportunities, threats, tourist_attractions, economic_crops, abundant_resources, community_groups, reporter_name, report_date) VALUES ('$swotAnalysis', '$strengths', '$weaknesses', '$opportunities', '$threats', '$touristAttractions', '$economicCrops', '$abundantResources', '$communityGroups', '$reporterName', '$reportDate')";

  // ทำการเพิ่มข้อมูล
  if (mysqli_query($conn, $sql)) {
    echo "บันทึกข้อมูลสำเร็จ";
    header("Location: index.php"); // กลับไปที่หน้า index.php
    exit;
  } else {
    echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>สร้างรายงานการวิเคราะห์พื้นที่</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>
<div class="container">
  <h2>สร้างรายงานการวิเคราะห์พื้นที่</h2>

  <form method="post" action="">
    <div class="mb-3">
    <label for="swot_analysis">การวิเคราะห์พื้นที่เป้าหมาย:</label>
    <input type="text" name="swot_analysis" id="swot_analysis" required><br><br>

    <label for="strengths">จุดแข็งของพื้นที่:</label>
    <input type="text" name="strengths" id="strengths" required><br><br>

    <label for="weaknesses">จุดอ่อนของพื้นที่:</label>
    <input type="text" name="weaknesses" id="weaknesses" required><br><br>

    <label for="opportunities">โอกาสและความท้าทายในพื้นที่:</label>
    <input type="text" name="opportunities" id="opportunities" required><br><br>

    <label for="threats">อุปสรรคและปัจจัยคุกคามในพื้นที่:</label>
    <input type="text" name="threats" id="threats" required><br><br>

    <label for="tourist_attractions">สถานที่ท่องเที่ยวหรือสถานที่สำคัญในพื้นที่:</label>
    <input type="text" name="tourist_attractions" id="tourist_attractions" required><br><br>

    <label for="economic_crops">พืชเศรษฐกิจในพื้นที่:</label>
    <input type="text" name="economic_crops" id="economic_crops" required><br><br>

    <label for="abundant_resources">สิ่งที่มีมากในพื้นที่:</label>
    <input type="text" name="abundant_resources" id="abundant_resources" required><br><br>

    <label for="community_groups">กลุ่มชุมชน/วิสาหกิจชุมชน:</label>
    <input type="text" name="community_groups" id="community_groups" required><br><br>

    <label for="reporter_name">ชื่อผู้รายงาน:</label>
    <input type="text" name="reporter_name" id="reporter_name" required><br><br>

    <label for="report_date">วันที่:</label>
    <input type="date" name="report_date" id="report_date" required><br><br>
    
    <button type="submit" value="บันทึก" class="btn btn-primary">บันทึก</button> <a href="index.php" class="btn btn-success">กลับสู่รายการรายงาน</a>
  </div>
  </form>
</div>
</body>
</html>
