
 <?php include 'include/header.php'; ?>

<form method="post" action="">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="feedback" placeholder="Message" required></textarea>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$mysqli = new mysqli("localhost", "root", "", "hostel2");
if ($mysqli->connect_error) {
    die("DB Error: " . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $query = "INSERT INTO font (name, email, message) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    if (!$stmt) {
        die("Prepare Failed: " . $mysqli->error);
    }

    $stmt->bind_param("sss", $name, $email, $feedback);
    $stmt->execute();

    if ($stmt->error) {
        die("Insert Error: " . $stmt->error);
    }

    echo "DATA INSERTED SUCCESSFULLY";
}
?>

