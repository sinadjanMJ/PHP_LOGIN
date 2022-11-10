<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">

     <!-- <script type="text/javascript">
          function preventBack(){window.history.forward()};
          setTimeout("preventBack()",0);
          window.onunload =function(){null;}
     </script> -->
     
</head>
<body>
     <h1>Gwapo si , <?php echo $_SESSION['fullname']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: sform.php");
     exit();
}
 ?>