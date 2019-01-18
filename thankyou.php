<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Jeremy Alexander - Web Designer</title>
    <meta name="description" content="Jeremy Alexander, freelance web design based in Portland, Oregon.">
    <meta http-equiv="refresh" content="10; url=index.php" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/navigation.css">
    
    <!-- Imported Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">    
    
    <!-- Scripts for navigation and gallery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
<?php

$servername = "localhost";
$database = "jeremy_webdesign_db";
$username = "jeremy_webdesign";
$password = "*******";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_comment = $_POST['comment'];    

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO `jeremy-form` (`name`, `email`,
        `comment`) VALUES ('$users_name',
        '$users_email', '$users_comment'
        );";
if (mysqli_query($conn, $sql)) {
      echo "";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>
    
     <!-- PHP header include -->
    <section class="mailer">
        <p>
        Thank you for your message, <?php echo $_POST["name"]; ?>!
        <br>
        The email address you provided is: <?php echo $_POST["email"]; ?>
        <br>
        Your comment: <?php echo $_POST["comment"]; ?> has been sent!            
        </p>
        
        <p>You can use the navigation to return to <a href="index.php" class="mailer-link">Jeremy Alexander's web design site</a>. You will be redirected to Jeremy Alexander's web design site within 10 seconds of form submission.</p>
    </section>

    <!-- PHP header include -->
    <?php
        include 'includes/header-noreply.php';
    ?>    
    
</body>
</html>
