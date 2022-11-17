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

$Email = $_POST{'email'};

$sql = "INSERT INTO email (email) VALUES ('$Email')";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

// header("location:jumia-index.html");

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/2074525eaa.js" crossorigin="anonymous"></script>
    <!-- my css -->
    <link rel="stylesheet" href="mystyle.css">
    <!-- bootstrap cdnlink{css} -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- bootstrap cdn{js} -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script defer src="script.js"></script>
    
</head>

<body>

    <section>
        <div class="info">
            <div class="arrow"><a href="./jumia-index.html" class="bth">&larr;</a></div>
            <div class="svg">
                <img class="loogo" src="../JUMIA/Jumia Nigeria _ Online Shopping for Groceries, Appliances & More! 2_files/myjumia-top-logo.png" alt="">
            </div>

            <h1 class="email-address">what's your email address?</h1>
            <p class="type">type your email to log in or create a jumia account.</p>

            <form method="post" action="sign-up.php" id="form">
                <input type="email" placeholder="email" name="email" id="email" value="email">
                <div id="error"></div>
                <div class="bton">
                    <button class="continue" type="submit">continue</button>
                </div>
                
                <a href="#">log in or register with phone number</a>
            </form>

            <button class="facebook">log in with facebook</button>
            <p class="futher-info">
                For further support, you may visit the Help Center or contact our customer service team.
            </p>
            <div class="jumia">jumia</div>
        </div>
    </section>
</body>
</html>