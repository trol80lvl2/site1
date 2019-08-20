<?php ob_start();?>
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
   <form class="form1" form action="" method="POST" enctype="multipart/form-data">
   <select class="elem" id="sel1" name="categ" required>
                    <option value="" disabled required selected style="display: none;">Виберіть категорію</option>
                  <?php 
					          $res = mysql_query("SELECT * FROM `category`") or die(mysql_error());
					          while($row = mysql_fetch_array($res))
						          echo("<option value=\"".$row['id_cat']."\">".$row['name_cat']."</option><br>");
                  ?>
        <input type="text" class="elem" name="zag" placeholder="Введіть заголовок новини" required><br>
        <label for="comment">Текст новини:</label><br>
                    <textarea name="textnew" class="form-control" rows="5" id="comment"></textarea><br>
                </div>
                <label for="pic">Фото</label>
                    <input type="file" class="file" name="image" required id="pic">
                    <input type="submit" name="submit" class="submit" value="Додати">
</form>
<?php
  if(isset($_POST['submit'])) {
    if(isset($_FILES['image'])) {
    
    $zag = mysql_escape_string($_POST['zag']);
    $body = mysql_escape_string($_POST['textnew']);
    $cat = mysql_escape_string($_POST['categ']);

    $dishimg = file_get_contents($_FILES['image']['tmp_name']);
    $dishimg = mysql_real_escape_string($dishimg);

    mysql_query("INSERT INTO `new` (head, body, pic, id_cat) VALUES ('$zag','$body','$dishimg','$cat')") or die(mysql_error());
    echo("<script>alert(\"Новину додано!\");</script>");
    header("Refresh: 0");
    }
  }
?>