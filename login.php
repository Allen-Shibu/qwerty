
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginstyles.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <div id="logincontainer">
        <!-- ;lkajs,,mkndf -->
        <div class="Logindatas">
            <form id="Loginform" method="POST" action="logininfocheck.php">
                <?php
                include ('logininfocheck.php');
                ?>
             
                <label id="logintitle">Login</label>
                <input class="signininput" name = 'lemail' type="text" placeholder="email address"><br>
                <input class="signininput" name = 'lpassword' type="password" placeholder="password"><br>
                <br><br>
                <button type="submit" class="registerbtn"> Sign in</button><br><br>
                <Label id="haveanaccount">i don't have an account</label>
                <a href="login.php" id="loginredirectbutton">register</a>

            </form>
        </div>
        
    </div>
</body>
</html>