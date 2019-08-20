<?php
  include('connect.php');
?>
<div class="up"><div class="email"><a class="admin" href="admin.php">dronapnews@gmail.com</a></div></div>
    <div class="topnav">
        <div class="topnav_wrap">
            <div class="logo">
                <a href="index.php"><img class="logopng" src="logo.png"></a>
            </div>
            <div class="second-nav">
            <?php
              $res = mysql_query("SELECT * FROM `category`") or die(mysql_error());
              while($row = mysql_fetch_array($res))
              echo('
              <div class="item">
              <span>
                <a class="nav-link" href="pagex.php?idcat='.$row['id_cat'].'">'.$row['name_cat'].'</a>
                </span>
              </div>
              ');
              ?>
            
            </div>
        </div>
    </div>