<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Головна</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <script src="/js/jquery.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="/js/jquery.cycle2.min.js"></script>
</head>
<body>
   <?php 
   include('menu.php');
$res = mysql_query("SELECT * FROM `new` WHERE new_id=".$_GET['idnew']) or die(mysql_error());
$row = mysql_fetch_array($res);
echo('
<div class="newspick">
      <h2 class="zag">'.$row['head'].'</h2>
      <div class="pic1">
        <img src="data:image/jpeg;base64,'.base64_encode($row['pic']).'">
      </div>
      <div class="info">
        <p class="info1">'.$row['body'].'</p></div></div>
');
?>  
</body>