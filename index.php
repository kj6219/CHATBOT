<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel= "stylesheet" type= "text/css" href="style2.css">
    </head>
    <form action="login.php" method="post">
        <h2>SKAD CHATBOT LOGIN</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label> User name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label> Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">LOGIN</button>
        <a href="register_form.php" class="btn">REGISTER</a>
        
    </form>
</html>