<?php
  $conn = mysql_connect('localhost', 'root', '');
  mysql_select_db('news', $conn) or die(mysql_error());
?>