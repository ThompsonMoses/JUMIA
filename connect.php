<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jumia_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die ("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// $sql = "INSERT INTO email (email)
// VALUES ('john@example.com')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);


if(isset($_POST["submit"])){
    $Email = $_POST['email'];
if(empty($_POST["email"])){
    echo "Error empty all field must be equal";
} 
$sql = "SELECT * from email where email = '$Email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "cannot update twice";
}
else{
    $sql = "INSERT INTO email (email) VALUES ('$Email')";

if (mysqli_query($conn, $sql)) {
  header("location:productpage.html");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}

}

// header("location:jumia-index.html");

mysqli_close($conn);
?>