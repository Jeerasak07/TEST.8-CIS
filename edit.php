<!-- จัดทำโดย นาย จีรศักดิ์ ผาลี 633410009-7 -->
<?php
require_once 'db_connect.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $select_query = "SELECT * FROM reports WHERE id = $id";
  $select_result = mysqli_query($conn, $select_query);

  if (mysqli_num_rows($select_result) == 1) {
    $row = mysqli_fetch_assoc($select_result);
    $swot_analysis = $row['swot_analysis'];
    $strengths = $row['strengths'];
    $weaknesses = $row['weaknesses'];
    $opportunities = $row['opportunities'];
    $threats = $row['threats'];
    $tourist_attractions = $row['tourist_attractions'];
    $economic_crops = $row['economic_crops'];
    $abundant_resources = $row['abundant_resources'];
    $community_groups = $row['community_groups'];
  } else {
    echo "ไม่พบรายงานที่ต้องการแก้ไข";
    exit();
  }
}

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $swot_analysis = $_POST['swot_analysis'];
  $strengths = $_POST['strengths'];
  $weaknesses = $_POST['weaknesses'];
  $opportunities = $_POST['opportunities'];
  $threats = $_POST['threats'];
  $tourist_attractions = $_POST['tourist_attractions'];
  $economic_crops = $_POST['economic_crops'];
  $abundant_resources = $_POST['abundant_resources'];
  $community_groups = $_POST['community_groups'];

  $update_query = "UPDATE reports SET swot_analysis = '$swot_analysis', strengths = '$strengths', weaknesses = '$weaknesses',
    opportunities = '$opportunities', threats = '$threats', tourist_attractions = '$tourist_attractions',
    economic_crops = '$economic_crops', abundant_resources = '$abundant_resources', community_groups = '$community_groups'
    WHERE id = $id";

  $update_result = mysqli_query($conn, $update_query);

  if ($update_result) {
    header("Location: index.php");
    exit();
  } else {
    echo "เกิดข้อผิดพลาดในการอัปเดตรายงาน";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>แก้ไขข้อมูลรายงาน</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>แก้ไขข้อมูลรายงาน</h2>
  <div class="mb-3">
  <form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="swot_analysis">การวิเคราะห์พื้นที่เป้าหมาย:</label>
    <input type="text" name="swot_analysis" id="swot_analysis" value="<?php echo $swot_analysis; ?>" required><br><br>

    <label for="strengths">จุดแข็งของพื้นที่:</label>
    <input type="text" name="strengths" id="strengths" value="<?php echo $strengths; ?>" required><br><br>

    <label for="weaknesses">จุดอ่อนของพื้นที่:</label>
    <input type="text" name="weaknesses" id="weaknesses" value="<?php echo $weaknesses; ?>" required><br><br>

    <label for="opportunities">โอกาสและความท้าทายในพื้นที่:</label>
    <input type="text" name="opportunities" id="opportunities" value="<?php echo $opportunities; ?>" required><br><br>

    <label for="threats">อุปสรรคและปัจจัยคุกคามในพื้นที่:</label>
    <input type="text" name="threats" id="threats" value="<?php echo $threats; ?>" required><br><br>
    
    <input type="text" name="tourist_attractions" id="tourist_attractions" value="<?php echo $tourist_attractions; ?>" required><br><br>

    <label for="economic_crops">พืชเศรษฐกิจในพื้นที่:</label>
    <input type="text" name="economic_crops" id="economic_crops" value="<?php echo $economic_crops; ?>" required><br><br>

    <label for="abundant_resources">สิ่งที่มีมากในพื้นที่:</label>
    <input type="text" name="abundant_resources" id="abundant_resources" value="<?php echo $abundant_resources; ?>" required><br><br>

    <label for="community_groups">กลุ่มชุมชน/วิสาหกิจชุมชน:</label>
    <input type="text" name="community_groups" id="community_groups" value="<?php echo $community_groups; ?>" required><br><br>
    
    <button type="submit" name="update" class="btn btn-primary">อัปเดต</button> <a href="index.php" class="btn btn-success">กลับสู่รายการรายงาน</a>
    </form>
  </div>
</div>
</body>
</html>
