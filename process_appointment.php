<form action="process_appointment.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Message"></textarea>
    <button type="submit" name="submit">Book Appointment</button>
</form>

<?php
// 1. Database Configuration
$servername = "localhost";
$username = "root"; // Default for local servers
$password = "";     // Default for local servers
$dbname = "hostel2";

// 2. Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Process Form Data
if (isset($_POST['submit'])) {
    // Sanitize input to prevent SQL Injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // 4. SQL Query (ID is usually auto-incremented, so we omit it)
    $sql = "INSERT INTO `font` (`name`, `email`, `message`) 
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Appointment sent successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>