<?php
 $Date = date('Ymd-His');
 $DateT = date('Y-m-d H:i:s');
 $age = $_POST["age"];
 $fac = $_POST["fac"];
 $tel = $_POST["tel"];
 
  
  $now = "Astazi: ".$DateT."\nRemote site: ".$_SERVER["REMOTE_ADDR"]."\nReferinta: ".$_SERVER["HTTP_REFERER"]."\nUser Agent: ".$_SERVER["HTTP_USER_AGENT"]."\n\nVarsta: ".$age."\nFacultate: ".$fac."\nTelefon: ".$tel;
  file_put_contents("logs/file-post-".$Date.".txt", $now);
?>

<html>
<body>

Varsta: <?php echo $age; ?><br>
Facultate: <?php echo $fac; ?><br>
Telefon: <?php echo $tel; ?><br>

<a href="index.php">Inapoi</a>

</body>
</html> 
