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
   <?php include('menu.php');?>
    <div class="news">

        <?php
  $res = mysql_query("SELECT * FROM `new` WHERE id_cat=".$_GET['idcat']) or die(mysql_error());
  while($row = mysql_fetch_array($res)) {
  echo('        <div class="each">
  <a href="newsex.php?idnew='.$row['new_id'].'"> <img class="img" src="data:image/jpeg;base64,'.base64_encode($row['pic']).'"></a>
   <h5>'.$row['head'].'</h5>
</div>');
  }
  ?>       

    </div>
</body>