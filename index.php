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
		  	color: #333333;
		  	width: 50%; /* Width of the div */
			margin: 0 auto; /* Center horizontally */
			width: auto;
			text-align: center;
			
		}
		th, td {
		  	padding: 10px;
			
		}
		th {
			white-space: nowrap;
		}
		.main {
			width: 700px;
    		margin: 100px auto;
			border: 5px solid white;
			padding: 10px;

			
			
			border-radius: 25px;
			background-color: white;
		}
		.headline {
			text-align: center;
		}
		input[type="text"], input[type="email"], input[type="number"], input[type="tel"], input[type="month"], input[type="datetime-local"] {
			width: 100%;   /* Input takes up the full width of its parent container */
			box-sizing: border-box; /* Ensures padding and border are included in the width */
		}
		.regBttn {
			display: flex;
			justify-content: center; /* Centers horizontally */
			align-items: center; /* Centers vertically */
			height: 100px; /* Set a height to see the vertical centering */
		}
		.reg_form {
			
			padding: 10px;
			color: #333333;
		}
		.mainTable {
			width: 1200px;
    		margin: 100px auto;
			padding: 50px;
			border-radius: 25px;
			background-color: white;
		}
		<style>
        /* Styles for the error message */
        .error-message {
            display: none; /* Initially hide the message */
            position: absolute; /* Position it relative to its nearest positioned ancestor */
            background-color: #f44336; /* Red background color */
            color: white; /* White text color */
            padding: 10px; /* Padding */
            border-radius: 5px; /* Rounded corners */
            z-index: 1000; /* Ensure it is above other elements */
            top: 50px; /* Position it above the button */
            left: 50%; /* Center horizontally */
            transform: translateX(-50%); /* Offset the positioning */
            transition: opacity 0.5s; /* Smooth fade-in effect */
            opacity: 0; /* Start as transparent */
        }

        /* Show the message when the class is added */
        .error-message.show {
            display: block; /* Show the message */
            opacity: 1; /* Make it fully opaque */
        }
	</style>
</head>
<body>
	<div class = "main">
		<div class = "headline"><h1>Registration for Game Developer</h1></div>

	<form action="core/handleForms.php" method="POST">
		
	<div class = "reg_form">
		<hr>

		<p style="font-size: 22px;"><b>Personal Background</b></p>

		<p><label for="full_name"><b>Full Name</b></label> <input type="text" name="full_name" required></p>

		<p><label for="age"><b>Age</b></label> <input type="number" id = "age" name="age" min="1" max="99" required></p>
	
		<p><label for="email"><b>Email</b></label> <input type="email" name="email" required></p>
		
		<p><label for="contact_number"><b>Contact Number</b></label> <input type="tel" id="contact_number" name="contact_number" placeholder="09xx-xxx-xxxx" pattern="09[0-9]{2}-[0-9]{3}-[0-9]{4}" required></p>
		
		<p style="font-size: 22px;"><b>Educational Background</b></p>

		<p><label for="bachelor_degree"><b>Bachelor Degree</b></label> <input type="text" name="bachelor_degree" required></p>
		
		<p><label for="university"><b>University</b></label> <input type="text" name="university" required></p>
		
		<p><label for="graduation_year"><b>Graduation Year</b></label> <input type="month" name="graduation_year" required></p>
		
		<p><label for="registration_date"><b>Registration Date</b></label> <input type="datetime-local" name="registration_date" required></p>
	</div>
		
		<div class = "regBttn"><p><input type="submit" name="insertNewStudentBtn"></p></div>
	</form>
	</div>

	<div class="mainTable">
		<table style="width:50%; margin-top: 50px;">

			<tr>
				<p><h1>Database Registration Table</h1></p>
				<hr>
				<th>ID</th>
				<th>Full Name</th>
				<th>Age</th>
				<th>Email</th>
				<th>Contact Number</th>
				<th>Bachelor Degree</th>
				<th>University</th>
				<th>Graduation Year</th>
				<th>Registration Date</th>
				<th>Action</th>
			</tr>

			<?php $seeAllStudentRecords = seeAllStudentRecords($pdo); ?>
			<?php foreach ($seeAllStudentRecords as $row) { ?>
			<tr>
				<td><?php echo $row['user_id']; ?></td>
				<td><?php echo $row['full_name']; ?></td>
				<td><?php echo $row['age']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['contact_number']; ?></td>
				<td><?php echo $row['bachelor_degree']; ?></td>
				<td><?php echo $row['university']; ?></td>
				<td><?php echo $row['graduation_year']; ?></td>
				<td><?php echo $row['registration_date']; ?></td>
				<td>
					<a href="editstudent.php?user_id=<?php echo $row['user_id'];?>">Edit</a>
					<a href="deletestudent.php?user_id=<?php echo $row['user_id'];?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
			</table>
	</div>
	

</body>
</html>