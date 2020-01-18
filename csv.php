<?php 
include 'config.php';
     if(isset($_POST["Import"])){
        
        $filename=$_FILES["file"]["tmp_name"];    
         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
			
              while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
               {
                 $sql = "INSERT into first_csv (Mobile_Number,Name,Email,City) 
                       VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."')";
                       $result = mysqli_query($con, $sql);
            if(!isset($result))
            {
              echo "<script>
                  alert('Invalid File:Please Upload CSV File.');
                  window.location = 'index.php'
                  </script>";    
            }
            else {
                echo "<script>
                alert('CSV File has been successfully Imported.');
                window.location = 'index.php'
              </script>";
            }
               }
          
               fclose($file);  
         }
      } 


 ?>