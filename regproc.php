<?php
if(isset($_GET['error'])){
    echo $_GET['error'];
}
?>


<?php
if(isset($_POST['reg'])){
    require "dbconn.php"; // Assuming dbconn.php contains the database connection code
    
    // Extracting and sanitizing form data
    $username = strip_tags($_POST['username']);
    $password = md5(strip_tags($_POST['password']));
    $repassword = md5(strip_tags($_POST['repassword'])); // You might want to reconsider storing passwords like this
    $email = strip_tags($_POST['email']);
    
    // Validation
    if($username == ''){
        header('location:./.reg.php?error=username empty');
        exit();
    }
    if($password !== $repassword){
        header('location:./.reg.php?error=passwords dont match');
        exit();
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('location:reg.php?error=email not valid');
        exit();
    }
    
    // Check if username already exists
    $query = "SELECT * FROM login WHERE username='$username'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) >= 1){
        header('location:reg.php?error=username already taken!');
        exit();
    }
    
    // Insert user into database
    $insert_query = "INSERT INTO login (username, password, email) VALUES ('$username', '$password', '$email')";
    if(mysqli_query($con, $insert_query)){
        require('index.php');
    } else {
        die("Error: " . mysqli_error($con));
    }
}
?>
