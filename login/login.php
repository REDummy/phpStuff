<?php
if(isset($_POST["submit"])){
    if($_POST["username"] == "admin" && $_POST["password"] == "admin"){

        header("Location : admin.php");
        exit;
    } else {
        $error = true;
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
<h1>Login</h1>

<?php if(isset($error)) : ?>
    <p>username or password is incorrect</p>
<?php endif; ?>

<ul>
<form action="" method="post">
    <li>
        <label for="username">username : </label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">password : </label>
        <input type="text" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
</form>

</ul>


</body>
</html>