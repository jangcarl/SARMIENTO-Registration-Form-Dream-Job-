<?php 
require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewDeveloperBtn'])) {
    $full_name = trim($_POST['full_name']);
    $age = trim($_POST['age']);
    $email = trim($_POST['email']);
    $contact_number = trim($_POST['contact_number']);
    $bachelor_degree = trim($_POST['bachelor_degree']);
    $university = trim($_POST['university']);
    $skills = trim($_POST['skills']);
    $experience = trim($_POST['experience']);
    $graduation_year = trim($_POST['graduation_year']);
    $registration_date = trim($_POST['registration_date']);

    if (!empty($full_name) && !empty($age) && !empty($email) && !empty($contact_number) && !empty($bachelor_degree) && !empty($university) && !empty($skills) && !empty($experience) && !empty($graduation_year) && !empty($registration_date)) {
        
        $query = insertIntoDeveloperRecords($pdo, $full_name, $age, $email, $contact_number, $bachelor_degree, $university, $skills, $experience, $graduation_year, $registration_date);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Insertion failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['editDeveloperBtn'])) {
    $user_id = $_GET['user_id'];
    $full_name = trim($_POST['full_name']);
    $age = trim($_POST['age']);
    $email = trim($_POST['email']);
    $contact_number = trim($_POST['contact_number']);
    $bachelor_degree = trim($_POST['bachelor_degree']);
    $university = trim($_POST['university']);
    $skills = trim($_POST['skills']);
    $experience = trim($_POST['experience']);
    $graduation_year = trim($_POST['graduation_year']);
    $registration_date = trim($_POST['registration_date']);

    if (!empty($user_id) && !empty($full_name) && !empty($age) && !empty($email) && !empty($contact_number) && !empty($bachelor_degree) && !empty($university) && !empty($skills) && !empty($experience) && !empty($graduation_year) && !empty($registration_date)) {
        $query = updateADeveloper($pdo, $user_id, $full_name, $age, $email, $contact_number, $bachelor_degree, $university, $skills, $experience, $graduation_year, $registration_date);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['deleteDeveloperBtn'])) {
    $query = deleteADeveloper($pdo, $_GET['user_id']);
    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Deletion failed";
    }
}

if (isset($_POST['backBttn']) || (isset($_POST['cancelBttn']))) {
    header("Location: ../index.php");
}
?>
