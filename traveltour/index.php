<?php include "database.php"; ?>

<?php
	//Create Select Query
	$query="select * from shouts order by time desc limit 100";
	$shouts = mysqli_query($con,$query);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <style>
        *{
    margin:0;
    padding:0;
}

body{
    font-family:arial;
    font-size:15px;
    line-height:1.5em;
    background:#f4f4f4;
}
#container{
    background:#333333;
    margin: 50px auto;
    overflow:auto;
    width:60%;
    min-height:610px;
}

header h1{
    color: #ffffff;
    font-size:22px;
    padding:15px 0 10px 10px;
    border-bottom:1px solid #ffffff;
}

#shouts{
    width:90%;
    background:#f4f4f4;
    height:400px;
    margin:20px auto;
    overflow:auto;
}
.shout{
    list-style:none;
    padding:8px;
    border-bottom:1px dotted;
}
.shout span{
    color:#aaaaaa;
}
#input{
    width:90%;
    min-height:80px;
    margin:auto;
    padding:0px;
}
#input input[type='text']{
    height:25px;
    width:48%;
    padding:3px;
    margin-bottom:20px;
    border:#666666 solid 1px;
}

#input .shout-btn{
    padding:5px;
    margin-bottom:30px;
    width:100%;
    margin:10px auto;
}

@media only screen and (max-width:768px){
    #input input[type='text']{
        width:98%;
    }
}

.error{
    background:#ff0000;
    color:#ffffff;
    padding:5px;
    margin-bottom:20px;
}
    </style>
    <title>Simple PHP Public Chatbox!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <h1>Simple PHP Public Chatbox!</h1>
      </header>
      <div id="shouts">
      	<ul>
	  <?php while ($row=mysqli_fetch_assoc($shouts)): ?>
      	    <li class="shout">
	      <span><?php echo $row['time'];  ?> - </span><strong><?php echo $row['user'];  ?>:</strong> <?php echo $row['message'];  ?>
	    </li>
	  <?php endwhile; ?>
      	</ul>
      </div>
      <div id="input">
      	<?php if (isset($_GET['error'])) : ?>
	      <div class="error"><?php echo $_GET['error'];  ?></div>
	<?php endif; ?>
        <form method="post" action="process.php">
          <input type='text'  name="user" placeholder="Enter your name" />
          <input type='text' name="message" placeholder="Enter message" />
          <br />
          <input class="shout-btn"type="submit" name="submit" value="Shout It LOUD" />
        </form>
      </div>
    </div>
  </body>
</html>