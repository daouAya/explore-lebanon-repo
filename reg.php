<?php
if(isset($_GET['error'])){
    echo $_GET['error'];
}
?>
<!DOCTYPE html>
<head>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <meta charset="utf-8" />
    <title>NIGHTLIFE</title>
    <link rel="stylesheet" href="login.css" />
</head>

<body>
    <div id="form">
<form action="regproc.php" enctype="multipart/form-data" method="POST">
    <label for="username" class="label">Username:<br><input name="username" type="text" class="input" /></label><br>
    <label for="password" class="label">Password:<br><input name="password" type="password" class="input" /></label><br>
    <label for="repassword" class="label">Re-Type Password:<br><input name="repassword" type="password" class="input"/></label><br>
    <label for="email" class="label">Email:<br><input name="email" type="email" class="input"/></label><br>
    <input name="reg" type="submit" value="reg" class="submit"/><br>
    </form>
</div>
<img src="Progress indicator-bro.png" class="plane">
</body>