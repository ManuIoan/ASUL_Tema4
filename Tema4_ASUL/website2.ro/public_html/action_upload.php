<?php
   if (($_FILES['input']['name']!="")){
      
      $target_dir = "files/";

      $file = $_FILES['input']['name'];

      $path = pathinfo($file);

      $filename = $path['filename'];

      $ext = $path['extension'];

      $temp_name = $_FILES['input']['tmp_name'];

      $path_filename_ext = $target_dir.$filename.".".$ext;
 
      if (file_exists($path_filename_ext)) {
 	echo "Acest fisier este deja!";
      } else {
        move_uploaded_file($temp_name,$path_filename_ext);
        echo "Fisierul a fost actualizat.";
      }
   } else echo "Nu poti incarca ceva gol!";
?>
