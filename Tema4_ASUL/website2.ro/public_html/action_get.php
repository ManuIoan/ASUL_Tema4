<?php
 $Date = date('Ymd-His');
 $DateT = date('Y-m-d H:i:s');
 $nume = $_GET["name"];
 $adresa = $_GET["adresa"];
 $pass = $_GET["pass"];
 
  
  $now = "Astazi: ".$DateT."\nRemote site: ".$_SERVER["REMOTE_ADDR"]."\nReferinta: ".$_SERVER["HTTP_REFERER"]."\nUser Agent: ".$_SERVER["HTTP_USER_AGENT"]."\n\nNumele: ".$nume."\nAdresa: ".$adresa."\nPassword: ".$pass;
  file_put_contents("logs/file-get-".$Date.".txt", $now);
?>

<html>
<body>

Nume: <?php echo $nume; ?><br>
Adresa: <?php echo $adresa; ?><br>
Password: <?php echo $pass; ?><br>

<a href="index.php">Inapoi</a>

</body>
</html> 
