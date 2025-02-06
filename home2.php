<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<style>
        body {
            background-image: url('about_smaller.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>

<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <!--<a href ="logout.php">Logout</a>-->
     <a href="logout.php"> <i class="lout"></i>Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>