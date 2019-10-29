<?php
require 'component/header-component.php';
?>

<form class="login" action="" method="post" name="login">
    <h1 class="login-title">Login</h1>
    <input type="text" class="login-input" name="username" placeholder="Username" autofocus>
    <input type="password" class="login-input" name="password" placeholder="Password">
    <input type="submit" value="Login" name="submit" class="login-button">
</form>

<?php 
require 'component/footer-component.php';
?>