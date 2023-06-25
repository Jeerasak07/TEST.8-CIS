<!-- จัดทำโดย นาย จีรศักดิ์ ผาลี 633410009-7 -->
<!DOCTYPE html>
<html>
<head>
  <title>รายงานการวิเคราะห์พื้นที่</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>รายงานการวิเคราะห์พื้นที่</h2>
    <h4>จัดทำโดย นาย จีรศักดิ์ ผาลี 633410009-7</h4>
    <a href="create.php" class="btn btn-success">เพิ่มข้อมูลรายงาน</a>
    <a href="login.php" class="btn btn-warning">ออกจากระบบ</a><br><br>
    <?php
    // เชื่อมต่อฐานข้อมูล
    require_once 'db_connect.php';

    // ส่งคำสั่ง SQL เพื่อดึงข้อมูลรายงาน
    $sql = "SELECT * FROM reports";
    $result = mysqli_query($conn, $sql);

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if (mysqli_num_rows($result) > 0) {
      // วนลูปแสดงข้อมูลรายงานทั้งหมด
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='panel panel-default'>";
        echo "<div class='panel-body'>";
        echo "<p><strong>การวิเคราะห์พื้นที่เป้าหมาย:</strong> " . $row['swot_analysis'] . "</p>";
        echo "<p><strong>SWOT Analysis</strong></p>";
        echo "<p><strong>จุดแข็งของพื้นที่:</strong> " . $row['strengths'] . "</p>";
        echo "<p><strong>จุดอ่อนของพื้นที่:</strong> " . $row['weaknesses'] . "</p>";
        echo "<p><strong>โอกาสและความท้าทายในพื้นที่:</strong> " . $row['opportunities'] . "</p>";
        echo "<p><strong>อุปสรรคและปัจจัยคุกคามในพื้นที่:</strong> " . $row['threats'] . "</p>";
        echo "<p><strong>ทรัพยากรท้องถิ่นที่สำคัญ</strong></p>";
        echo "<p><strong> - สถานที่ท่องเที่ยวหรือสถานที่สำคัญในพื้นที่:</strong></p>";
        echo "<p>" . $row['tourist_attractions'] . "</p>";
        echo "<p><strong> - พืชเศรษฐกิจในพื้นที่</strong></p>";
        echo "<p>" . $row['economic_crops'] . "</p>";
        echo "<p><strong> - สิ่งที่มีมากในพื้นที่</strong></p>";
        echo "<p>" . $row['abundant_resources'] . "</p>";
        echo "<p><strong> - กลุ่มชุมชน/วิสาหกิจชุมชน</strong></p>";
        echo "<p>" . $row['community_groups'] . "</p>";
        echo "</div>";
        echo "<div class='panel-heading'><strong>ชื่อผู้รายงาน:</strong> " . $row['reporter_name'] . " | <strong>วันที่:</strong> " . $row['report_date'] . "</div>";
        echo "<div class='panel-footer'><a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>แก้ไขข้อมูลรายงาน</a> <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>ลบข้อมูลรายงาน</a></div>";
        echo "</div>";
      }
    } else {
      echo "<p>ไม่มีข้อมูลรายงาน</p>";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($conn);
    ?>
  </div>
</body>
</html>
