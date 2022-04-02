<htm1><head><title>Login</title></head><body>
<?php 
session_start();
if ($_POST["username"] == "Haris" && $_POST["password"] == "k181190") {
    $_SESSION["Login"] = "YES";
    echo "<h1>You are now logged correctly in</h1>";
    echo "<p><a href='document.php'> Link to protected file</a><p/>";
} else{
    $_SESSION[ "Login"] = "NO";
    echo "<h1>You are NOT logged correctly in </h1>";
    echo "<p><a href='document.php'>Link to protected file</a></p>";
}?>
</body></htm1>

