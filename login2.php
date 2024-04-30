<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
    <form method="post" action="loginproc.php">
        <label for="uname">Username:</label>
        <input type="text" id="uname" name="uname"><br><br>
        <label for="upass">Password:</label>
        <input type="password" id="upass" name="upass"><br><br>
        <input type="submit" value="Login">
    </form>
    <form method="post" action="logout.php">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>

<?php 

session_start();

// Database connection
require("dbconn.php");

// Initialize error message variable
$error_message = "";

// Check if username and password are set in the POST request
if (isset($_POST['uname'], $_POST['upass'])) {
    // Sanitize input
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $upass = mysqli_real_escape_string($con, $_POST['upass']);

    // Hash the password
    $hashed_password = password_hash($upass, PASSWORD_DEFAULT);

    // SQL query to check if the provided username exists
    $sql = "SELECT * FROM login WHERE username = '$uname'";
    $result = mysqli_query($con, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verify the password
        if (password_verify($upass, $row['password'])) {
            // If login is successful, set session variables and redirect
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
            exit();
        } else {
            // If password is incorrect, show error message
            $error_message = "Invalid password.";
        }
    } else {
        // If username doesn't exist, show error message
        $error_message = "User not found.";
    }

    // Close the database connection
    mysqli_close($con);
}
?>