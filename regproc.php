<?php
if(isset($_GET['error'])){
    echo $_GET['error'];
}
?>
<form action="regproc.php" enctype="multipart/form-data" method="POST">
    <label for="username">Username:<input name="username" type="text" /></label><br>
    <label for="password">Password:<input name="password" type="password" /></label><br>
    <label for="repassword">Re-Type Password:<input name="repassword" type="password" /></label><br>
    <label for="email">Email:<input name="email" type="email" /></label><br>
    <input name="reg" type="submit" value="reg"/><br>
</form>

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
