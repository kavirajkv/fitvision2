
<?php
session_start();

$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password
$dbname = "kv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the user exists
    $sql = "SELECT * FROM users WHERE email='$email' AND pword='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, login successful
        $row = $result->fetch_assoc();
        $_SESSION['uname'] = $row['uname']; // Store the username in session
        $_SESSION['userid'] = $row['id'];
        $conn->close();
        header('Location: workplan.php');
    } else {
        // User doesn't exist or incorrect credentials
        $_SESSION['error'] = "Invalid username or password.";
        $conn->close();
        header('Location: login.php');
    }
}

?>