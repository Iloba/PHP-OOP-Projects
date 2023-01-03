<?php
    require('validation.php');
    if(isset($_POST['submit'])){
        $validation = new FormValidator($_POST);
        $errors = $validation->validateForm();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="new-user">
        <h2>Create New User</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="username" value="<?php echo htmlspecialchars($_POST['username']) ?? ''?>">
                <small class="error">
                    <?php echo $errors['username'] ?? ''?>
                </small>
            </div>
            <div>
                <label for="">Email</label>
                <input type="text" name="email" placeholder="email" value="<?php echo htmlspecialchars($_POST['email']) ?? ''?>">
                <small class="error">
                    <?php echo $errors['email'] ?? ''?>
                </small>
            </div>

            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>