<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT name,email from customer ORDER BY user_id";
	$res = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($res) > 0) {
		while($row = mysqli_fetch_assoc($res)) {
			$tmp_name = $row["name"];
		}
	} else echo "No Data";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<form action="site.php" method="POST" name="login">
	    <div class="form-group">
	         <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Name" value="">
	    </div>
	    <div class="form-group"> 
	        <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email"> 
	    </div>
	    <div class="form-group">
	        <input type="number" min="0" name="phone" id="phone"  class="form-control my-input" placeholder="Phone">
	    </div>
	    <div class="text-center ">
	        <input type="submit" name="submit" class=" btn btn-block send-button tx-tfm" value="Sign Up">
	    </div> <hr/>
	   	<div>
		<?php echo $tmp_name ?>   
		</div>
    </form>
</body>
</html>