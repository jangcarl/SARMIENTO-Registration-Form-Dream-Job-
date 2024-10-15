<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
			color: #333333;
			background-image: url('https://t3.ftcdn.net/jpg/03/23/88/08/360_F_323880864_TPsH5ropjEBo1ViILJmcFHJqsBzorxUB.jpg');
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
		.main {
			width: 700px;
    		margin: 100px auto;
			border: 5px solid white;
			padding: 10px;

			border-radius: 25px;
			background-color: white;
		}
		.studentContainer {
			border: solid red; 
			padding: 15px;
			margin-left: 50px;
			margin-right: 50px;
			margin-bottom: 20px;
			margin-top: 20px;
		}
		.deleteRed {
			color: red;
		}


		.deleteBttn {
			display: flex;
			justify-content: center; /* Centers horizontally */
			align-items: center; /* Centers vertically */
			height: 75px; /* Set a height to see the vertical centering */
		}
		.cancelBttn {
			display: flex;
			justify-content: center; /* Centers horizontally */
			align-items: center; /* Centers vertically */
			height: 75px; /* Set a height to see the vertical centering */
		}
		.deleteNback {
			display: flex; /* Enable flexbox layout */
            justify-content: space-between; /* Optional: Space between items */
			padding-left: 100px;
			padding-right: 100px;
		}



	</style>
</head>
<body>
	<div class = "main">
		<p><h1 style = "text-align: center;">Are you sure you want to <span class="deleteRed">delete</span> this user?</h1></p>
		<?php $getStudentById = getStudentById($pdo, $_GET['user_id']); ?>
		<form action="core/handleForms.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST">
	
		<div class="studentContainer">
			<p><b>Full Name</b>: <?php echo $getStudentById['full_name']; ?></p>
			<p><b>Age</b>: <?php echo $getStudentById['age']; ?></p>
			<p><b>Email</b>: <?php echo $getStudentById['email']; ?></p>
			<p><b>Contact Number</b>: <?php echo $getStudentById['contact_number']; ?></p>
			<p><b>Bachelor's Degree</b>: <?php echo $getStudentById['bachelor_degree']; ?></p>
			<p><b>University</b>: <?php echo $getStudentById['university']; ?></p>
			<p><b>Graduation Year</b>: <?php echo $getStudentById['graduation_year']; ?></p>
			<p><b>Registration Date</b>: <?php echo $getStudentById['registration_date']; ?></p>
			
		</div>

		<div class="deleteNback">
				<div class = "cancelBttn">
					<input type="submit" name="cancelBttn" value="Cancel">
				</div>
			
				<div class="deleteBttn">
					<input type="submit" name="deleteStudentBtn" value="Delete">
				</div>
			</div>


	</form>
	</div>
	
</body>
</html>


