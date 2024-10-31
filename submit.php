<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "thedailyfoodplaterestaurant"; 

$conn = new mysqli($servername, $username, $password, $dbname); 

if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 

$email = $_POST['email']; 
$phoneNumber = $_POST['phoneNumber']; // Make sure this matches the input name
$comment = $_POST['comment']; // Make sure this matches the textarea name

$sql = "INSERT INTO contact (email, phoneNumber, comment) VALUES ('$email', '$phoneNumber', '$comment')"; 

if ($conn->query($sql) === TRUE) { 
    echo "Thank you! Your contact details have been submitted."; 
} else { 
    echo "Error: " . $sql . "<br>" . $conn->error; 
} 

$conn->close(); 
?>
