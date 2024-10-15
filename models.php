<!-- Functions for interacting with the database -->
<?php require_once 'dbConfig.php';

function insertIntoDeveloperRecords($pdo, $full_name, $age, $email, $contact_number, $bachelor_degree, $university, $skills, $experience, $graduation_year, $registration_date) {
    $sqlCheck = "SELECT COUNT(*) FROM users WHERE email = ? OR contact_number = ?";
    $stmtCheck = $pdo->prepare($sqlCheck);
    $stmtCheck->execute([$email, $contact_number]);
    $count = $stmtCheck->fetchColumn();
    // Step 2: If count > 0, then the user already exists
    if ($count > 0) {
        $error_message = "This field is required!";
        echo "Error: A user with this email or contact number already exists.";
        return false;
    }

    $sql = "INSERT INTO users (full_name, age, email, contact_number, bachelor_degree, university, skills, experience, graduation_year, registration_date) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$full_name, $age, $email, $contact_number, $bachelor_degree, $university, $skills, $experience, $graduation_year, $registration_date]);
    if ($executeQuery) {
        return true;
    } else {
        echo "Something went wrong while inserting the data.";
        return false;
    }
}

function seeAllDeveloperRecords($pdo) {
    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}

function getDeveloperByID($pdo, $user_id) {
    $sql = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$user_id])) {
        return $stmt->fetch();
    }
}

function updateADeveloper($pdo, $user_id, $full_name, $age, $email, $contact_number, $bachelor_degree, $university, $skills, $experience, $graduation_year, $registration_date) {
    $sql = "UPDATE users SET full_name = ?, age = ?, email = ?, contact_number = ?, bachelor_degree = ?, university = ?, skills = ?, experience = ?, graduation_year = ?, registration_date = ? WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$full_name, $age, $email, $contact_number, $bachelor_degree, $university, $skills, $experience, $graduation_year, $registration_date, $user_id]);
    if ($executeQuery) {
        return true;
    }
}

function deleteADeveloper($pdo, $user_id) {
    $sql = "DELETE FROM users WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$user_id]);
    if ($executeQuery) {
        return true;
    }
}
?>
