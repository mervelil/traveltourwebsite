

<?php

  @include 'config.php';
  session_start();
  if (!isset($_SESSION['user_name'])) {
   header('location:login_form.php');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
</head>
<body>
      <div class="container">
        <div class="content">
            <h3>hi , <span>user</span></h3>
            <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
            <p>this is an user page</p>
            <a href="home.php" class="btn">home</a>
            <a href="book.php" class="btn">book now</a>
            <a href="package.php"  class="btn">packages</a>
            <a href="index.php" class="btn">Chatbox</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
      </div>
</body>
</html>