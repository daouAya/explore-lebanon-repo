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