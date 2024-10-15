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
		.regForm {
			padding: 10px;
		}
		input[type="text"], input[type="email"], input[type="number"], input[type="tel"], input[type="month"], input[type="datetime-local"] {
			width: 100%;   /* Input takes up the full width of its parent container */
			box-sizing: border-box; /* Ensures padding and border are included in the width */
		}
		.regBttn{
			display: flex;
			justify-content: center; /* Centers horizontally */
			align-items: center; /* Centers vertically */
			height: 75px; /* Set a height to see the vertical centering */
		}.backBttn{
			display: flex;
			justify-content: center; /* Centers horizontally */
			align-items: center; /* Centers vertically */
			height: 75px; /* Set a height to see the vertical centering */
		}
		.backNedit{
			display: flex; /* Enable flexbox layout */
            justify-content: space-between; /* Optional: Space between items */
			padding-left: 100px;
			padding-right: 100px;
		}
		
	</style>
</head>
<body>
	<?php $getStudentById = getStudentById($pdo, $_GET['user_id']); ?>
	<form action="core/handleForms.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST">
		
	<div class="main">
		<p><h1 style = "text-align: center";><b>Edit Mode</b></h1></p>
		<hr>

		<div class = "regForm">
			<p>
				<label for="full_name"><b>Full Name</b></label> 
				<input type="text" name="full_name" value="<?php echo $getStudentById['full_name']; ?>">
			</p>
			<p>
				<label for="age"><b>Last Name</b></label> 
				<input type="text" name="age" value="<?php echo $getStudentById['age']; ?>">
			</p>
			<p>
				<label for="email"><b>Email</b></label>
				<input type="text" name="email" value="<?php echo $getStudentById['email']; ?>">
			</p>
			<p>
				<label for="contact_number"><b>Year Level</b></label>
				<input type="text" name="contact_number" value="<?php echo $getStudentById['contact_number']; ?>">
			</p>
			<p>
				<label for="bachelor_degree"><b>Bachelor's Degree</b></label>
				<input type="text" name="bachelor_degree" value="<?php echo $getStudentById['bachelor_degree']; ?>">
			</p>
			<p>
				<label for="university"><b>University</b></label>
				<input type="text" name="university" value="<?php echo $getStudentById['university']; ?>"></p>
			<p>
				<label for="graduation_year"><b>Graduation Year</b></label>
				<input type="text" name="graduation_year" value="<?php echo $getStudentById['graduation_year']; ?>">
			</p>
			<p>
				<label for="registration_date"><b>Registration Date</b></label>
				<input type="text" name="registration_date" value="<?php echo $getStudentById['registration_date']; ?>">
				
			</p>
			
			<div class="backNedit">
				<div class = "backBttn">
					<input type="submit" name="backBttn" value="Cancel">
				</div>
			
				<div class="regBttn">
					<input type="submit" name="editStudentBtn" value="Edit">
				</div>
			</div>
			
		</div>
	</div>
	</form>
</body>
</html> 
