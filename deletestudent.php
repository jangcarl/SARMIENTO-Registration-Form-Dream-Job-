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
    color: #333333;
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
.developerContainer {
    border: solid white;
    padding: 15px;
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 20px;
    margin-top: 20px;
}
.deleteRed {
    color: white;
}
.deleteBttn {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 75px;
}
.cancelBttn {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 75px;
}
.deleteNback {
    display: flex;
    justify-content: space-between;
    padding-left: 100px;
    padding-right: 100px;
}
</style>
</head>
<body>
<div class="main">
    <p><h1 style="text-align: center;">Are you sure you want to <i><span class="deleteRed">delete</span></i> this developer?</h1></p>
    <?php $getDeveloperById = getDeveloperById($pdo, $_GET['user_id']); ?>
    <form action="core/handleForms.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST">
        <div class="developerContainer">
            <p><b>Full Name</b>: <?php echo $getDeveloperById['full_name']; ?></p>
            <p><b>Age</b>: <?php echo $getDeveloperById['age']; ?></p>
            <p><b>Email</b>: <?php echo $getDeveloperById['email']; ?></p>
            <p><b>Contact Number</b>: <?php echo $getDeveloperById['contact_number']; ?></p>
            <p><b>Bachelor Degree</b>: <?php echo $getDeveloperById['bachelor_degree']; ?></p>
            <p><b>University</b>: <?php echo $getDeveloperById['university']; ?></p>
            <p><b>Skills</b>: <?php echo $getDeveloperById['skills']; ?></p>
            <p><b>Years of Experience</b>: <?php echo $getDeveloperById['experience']; ?></p>
            <p><b>Graduation Year</b>: <?php echo $getDeveloperById['graduation_year']; ?></p>
            <p><b>Registration Date</b>: <?php echo $getDeveloperById['registration_date']; ?></p>
        </div>
        <div class="deleteNback">
            <div class="cancelBttn"><input type="submit" name="cancelBttn" value="Cancel"></div>
            <div class="deleteBttn"><input type="submit" name="deleteDeveloperBtn" value="Delete"></div>
        </div>
    </form>
</div>
</body>
</html>
