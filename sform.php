<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])){
header("Location: home.php");
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Sign in or Sign up</title>
    <link rel="stylesheet" type="text/css" href="sty.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="signup.php" method="post">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="name" placeholder="Full name" required="">
                <input type="text" name="txt" placeholder="User name" required="">
                <input type="email" name="emails" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <button type="submit">Sign up</button>
                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
            </form>
        </div>

        <div class="login">
            <form action="login.php" method="post">

                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="uname" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            </form>
        </div>
    </div>
</body>

</html>