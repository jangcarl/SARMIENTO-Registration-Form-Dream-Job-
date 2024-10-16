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
    font-family: "Times New Roman";
    color: white;
    background-image: url('https://img.freepik.com/premium-photo/painting-chubby-cat-sitting-its-hind-legs-generative-ai_97167-682.jpg');
}
input {
    font-size: 1.5em;
    height: 50px;
    width: 200px;
}
table, th, td {
    color: white;
    width: 50%; 
    margin: 0 auto; 
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
    background-color: fuchsia;
}
.headline {
    text-align: center;
}
input[type="text"], input[type="email"], input[type="number"], input[type="tel"], input[type="month"], input[type="datetime-local"] {
    width: 100%; 
    box-sizing: border-box; 
}
.regBttn {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px; 
}
.reg_form {
    padding: 10px;
    color: white;
}
.mainTable {
    width: 1300px;
    margin: 100px auto;
    padding: 50px;
    background-color: fuchsia;
    border: 5px solid white;
}
.error-message {
    display: none; 
    position: absolute; 
    background-color: #f44336; 
    color: white; 
    padding: 10px; 
    border-radius: 5px; 
    z-index: 1000; 
    top: 50px; 
    left: 50%; 
    transform: translateX(-50%); 
    transition: opacity 0.5s; 
    opacity: 0; 
}
.error-message.show {
    display: block; 
    opacity: 1; 
}
</style>
</head>
<body>
<div class="main">
    <div class="headline"><h1>Registration for Web Developer</h1></div>
    <form action="core/handleForms.php" method="POST">
    <div class="reg_form">
    <hr>
    <p style="font-size: 22px;"><b>Personal Background</b></p>
    <p><label for="full_name"><b>Full Name</b></label> <input type="text" name="full_name" required></p>
    <p><label for="age"><b>Age</b></label> <input type="number" id="age" name="age" min="18" max="99" required></p>
    <p><label for="email"><b>Email</b></label> <input type="email" name="email" required></p>
    <p><label for="contact_number"><b>Contact Number</b></label> <input type="tel" id="contact_number" name="contact_number" placeholder="09xx-xxx-xxxx" pattern="09[0-9]{2}-[0-9]{3}-[0-9]{4}" required></p>
    <p style="font-size: 22px;"><b>Technical Background</b></p>
    <p><label for="bachelor_degree"><b>Bachelor Degree in Computer Science</b></label> <input type="text" name="bachelor_degree" required></p>
    <p><label for="university"><b>University</b></label> <input type="text" name="university" required></p>
    <p><label for="skills"><b>Programming Languages and Skills</b></label> <input type="text" name="skills" required></p>
    <p><label for="experience"><b>Years of Experience</b></label> <input type="number" name="experience" min="0" max="40" required></p>
    <p><label for="graduation_year"><b>Graduation Year</b></label> <input type="month" name="graduation_year" required></p>
    <p><label for="registration_date"><b>Registration Date</b></label> <input type="datetime-local" name="registration_date" required></p>
</div>
<div class="regBttn"><p><input type="submit" name="insertNewDeveloperBtn"></p></div>
</form>
</div>
<div class="mainTable">
<table style="width:50%; margin-top: 50px;">
<tr><p><h1>Database Registration Table</h1></p><hr>
<th>ID</th><th>Full Name</th><th>Age</th><th>Email</th><th>Contact Number</th><th>Bachelor Degree</th><th>University</th><th>Skills</th><th>Experience</th><th>Graduation Year</th><th>Registration Date</th><th>Action</th></tr>
<?php $seeAllDeveloperRecords = seeAllDeveloperRecords($pdo); ?>
<?php foreach ($seeAllDeveloperRecords as $row) { ?>
<tr>
<td><?php echo $row['user_id']; ?></td>
<td><?php echo $row['full_name']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['contact_number']; ?></td>
<td><?php echo $row['bachelor_degree']; ?></td>
<td><?php echo $row['university']; ?></td>
<td><?php echo $row['skills']; ?></td>
<td><?php echo $row['experience']; ?></td>
<td><?php echo $row['graduation_year']; ?></td>
<td><?php echo $row['registration_date']; ?></td>
<td><a href="editstudent.php?user_id=<?php echo $row['user_id'];?>">Edit</a>
<a href="deletestudent.php?user_id=<?php echo $row['user_id'];?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>
