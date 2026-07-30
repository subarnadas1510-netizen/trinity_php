<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Records 1</title>
</head>
<body>
	<div class="container mt-5">
	<div class="col-md-6">
		<div class="card">
			<div class="card-head">
  				<h4>Student's Records 
  					<button class="btn btn-outline-success float-end"><a href="entry_form1.php">Add</a></button>
  				</h4>
  				<h5><button class="btn btn-outline-success"><a href="search.php">Search</a></button></h5>
  			</div>
  			<div class="card-body">	
              	<table class="table table-bordered">
    				<thead>
      					<tr>
      						<th>ID</th>
        					<th>Name</th>
        					<th>Email</th>
        					<th>Mobile No</th>
        					<th>Course</th>
        					<th>Action</th>
         				</tr>
    				</thead>

    				<?php
			require "dbconnect.php";
			if (mysqli_connect_error()) 
			{
				echo mysqli_connect_error();
				exit;
			}

			//echo "Connected Successfully";
			$db=mysqli_select_db($conn,'cms');

			
				$query="SELECT *
							FROM studentdb";
							//ORDER BY id DESC";

				$query_run=mysqli_query($conn,$query);
				while ($row=$query_run->fetch_assoc()) 
				{
				//echo $row['id'];

			?>

			<tbody>
				<tr>
					<td>
						<?php
						echo $row['id'];
						?>
					</td>
					<td>
						<?php
						echo $row['name'];
						?>
					</td>
					<td>
						<?php 
						echo $row['email'];
						?>
					</td>
					<td>
						<?php
						echo $row['mobile'];
						?>
					</td>
					<td>
						<?php
						echo $row['course'];
						?>
					</td>
					<td>
						

						<form action="delete1.php" method="POST"> 
							<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						</form>

						


						<a href="view.php?rowid=<?php echo $row['id']; ?> ">view</a>


						<button class="btn btn-outline-danger" name="delete" type="submit" form="Delete_data" value="Delete_data" onclick="location.href='delete1.php';">Delete</button>
						
					</td>
				</tr>
			</tbody>	
				<?php
				}

		?>
	</table>

</body>
</html>