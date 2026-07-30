<?php 

require 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$sql="INSERT INTO article (title,content)
	VALUES (?,?)";
	$stmt= mysqli_prepare($conn,$sql);

	if ($stmt === false) {
		echo mysqli_error($conn);
		# code...
	}
	else {
		mysqli_stmt_bind_param($stmt,"ss",$_POST['title'],$_POST['content']);
		mysqli_stmt_execute($stmt);
	}
	# code...
}
//if ($_SERVER["REQUEST_METHOD"]=="POST")
 //{
 	//require 'include/dbconnect.php' ;
	//$sql = "INSERT INTO article (title,content)
	//VALUES ('".$_POST['title']." ',' ".$_POST['content']."'  ) " ;	

//$result = mysqli_query($conn,$sql) ;

//if ($result === false)
 //{
	//echo mysqli_error($conn) ;	
//}

//}

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form  method="post" >
	<div>
		<label>Title</label>
		<input name="title" id="title" placeholder="Article title">	
	</div>

	<div>
		<label>Content</label>
		<textarea name="content" rows="4" cols="40" placeholder="Enter Article Content" ></textarea>
	</div>

	<button>Add</button>


</form>
</body>
</html>