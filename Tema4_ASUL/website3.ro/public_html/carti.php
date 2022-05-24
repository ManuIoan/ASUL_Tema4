<?php
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password, "ASUL");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
<style>
	nav{
		display: flex;
		
	}
	.ml{
		margin-left: 10px;
	}
	a{
		color:black;
	}
	</style>
    <title>Website3</title>
  </head>
  <body>
   <nav>
	   <div class="ACASA ml">
          <a href="index.php"> ACASA</a>

	   </div>
	
	   <div class="carti ml">
           <a href="carti.php">
			   Cartile mele preferate
		   </a>
	   </div>

	   <div class="jocuri ml">
            <a href="jocuri.php">
				Jocurile mele preferate
			</a>
	   </div>


   </nav>

  <div class="despre">
	  <h1>Carti:</h1>
 <?php 
  $sql = mysqli_query($conn, "SELECT * from carti ");
  while($row = mysqli_fetch_assoc($sql))
  {
		echo "<h3>Carte cu numarul ".$row['id']." este ".$row['carte']." si are ca autor pe: ".$row['autor']."</h3>"; 
  }

  
?>


  </div>



  </body>
</html>
