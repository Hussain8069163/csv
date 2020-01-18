<?php 
include 'config.php'
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Csv</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
	

	<div class="row">
		<form action="csv.php" method="POST" enctype="multipart/form-data">

			<!-- Form Name -->
       <legend>Csv Form</legend>
        <!-- File Button -->
       <div class="form-group">
           <div class="col-md-4">
               <input type="file" name="file" id="file" class="input-large" required>
           </div>
       </div>
        <!-- Button -->
       <div class="form-group">
           <div class="col-md-4">
               <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
           </div>
       </div>
             <!--  Form Name Close -->

		</form>

	<?php include 'csv.php' ?>	
	</div>

</div>

</body>
</html>