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
    width: 100%;
    box-sizing: border-box;
}
.regBttn {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 75px;
}
.backBttn {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 75px;
}
.backNedit {
    display: flex;
    justify-content: space-between;
    padding-left: 100px;
    padding-right: 100px;
}
</style>
</head>
<body>
<?php $getDeveloperById = getDeveloperById($pdo, $_GET['user_id']); ?>
<form action="core/handleForms.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST">
<div class="main">
    <p><h1 style="text-align: center;"><b>Edit Mode</b></h1></p>
    <hr>
    <div class="regForm">
        <p><label for="full_name"><b>Full Name</b></label> <input type="text" name="full_name" value="<?php echo $getDeveloperById['full_name']; ?>"></p>
        <p><label for="age"><b>Age</b></label> <input type="number" name="age" value="<?php echo $getDeveloperById['age']; ?>"></p>
        <p><label for="email"><b>Email</b></label><input type="email" name="email" value="<?php echo $getDeveloperById['email']; ?>"></p>
        <p><label for="contact_number"><b>Contact Number</b></label><input type="tel" name="contact_number" value="<?php echo $getDeveloperById['contact_number']; ?>"></p>
        <p><label for="bachelor_degree"><b>Bachelor's Degree</b></label><input type="text" name="bachelor_degree" value="<?php echo $getDeveloperById['bachelor_degree']; ?>"></p>
        <p><label for="university"><b>University</b></label><input type="text" name="university" value="<?php echo $getDeveloperById['university']; ?>"></p>
        <p><label for="skills"><b>Skills</b></label><input type="text" name="skills" value="<?php echo $getDeveloperById['skills']; ?>"></p>
        <p><label for="experience"><b>Years of Experience</b></label><input type="number" name="experience" value="<?php echo $getDeveloperById['experience']; ?>"></p>
        <p><label for="graduation_year"><b>Graduation Year</b></label><input type="month" name="graduation_year" value="<?php echo $getDeveloperById['graduation_year']; ?>"></p>
        <p><label for="registration_date"><b>Registration Date</b></label><input type="datetime-local" name="registration_date" value="<?php echo $getDeveloperById['registration_date']; ?>"></p>
        <div class="backNedit">
            <div class="backBttn"><input type="submit" name="backBttn" value="Cancel"></div>
            <div class="regBttn"><input type="submit" name="editDeveloperBtn" value="Edit"></div>
        </div>
    </div>
</div>
</form>
</body>
</html>
