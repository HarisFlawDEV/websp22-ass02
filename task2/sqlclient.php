<htm1><head><title>Login</title></head><body>
<?php 
$query = $_POST["Query"];
$database = $_POST["database"];

if($database == "") //CREATION OF DATABASE
{
        // Create connection
$conn = new mysqli($_POST["ServerName"],$_POST["User"],$_POST["Pass"]);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";
    // Create database
if ($conn->query($query) === TRUE) {
    echo "Query Result : 1\nSQL:\n".$query."\nexecuted! Check via PHPMyAdmin to Confirm";
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;  }
  
  $conn->close();
}
else { //with database
    
        // Create connection
$conn = new mysqli($_POST["ServerName"],$_POST["User"],$_POST["Pass"],$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

if ($conn->query($query) === TRUE) {
    echo "Query Result : 1\nSQL:\n".$query."\nexecuted! Check via PHPMyAdmin to Confirm";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
}



?>
</body></htm1>