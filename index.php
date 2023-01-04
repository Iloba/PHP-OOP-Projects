<?php

declare(strict_types=1);
require_once 'OOP Principles/PhysicalBook.php';
require_once 'OOP Principles/DigitalBook.php';
require_once 'OOP Principles/PlayList/playlist.php';
require_once 'OOP Principles/PlayList/song.php';
// require('validation.php');
// if(isset($_POST['submit'])){
//     $validation = new FormValidator($_POST);
//     $errors = $validation->validateForm();
// }

// $PhysicalBook = new PhysicalBook('OOP in Practice', 'Robert C Martin', 1000, 300);
// $DigitalBook = new DigitalBook('OOP Ebook', 'Robert C Martin', 100, 30);
// var_dump($DigitalBook);
// var_dump($PhysicalBook);

$playlist = new PlayList('Naija Hits');
$song1 = new Song('Fem', 'Davido');
$song2 = new Song('Sokoto', 'Yung John');
$playlist->addSongs($song1);
$playlist->addSongs($song2);
echo $playlist->getNumberOfSongs();
var_dump($playlist->songs);



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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <div>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="username" value="<?php echo htmlspecialchars($_POST['username'] ??  '') ?>">
                <small class="error">
                    <?php echo $errors['username'] ?? '' ?>
                </small>
            </div>
            <div>
                <label for="">Email</label>
                <input type="text" name="email" placeholder="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '') ?>">
                <small class="error">
                    <?php echo $errors['email'] ?? '' ?>
                </small>
            </div>

            <div>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="password" value="<?php echo htmlspecialchars($_POST['password'] ?? '') ?>">
                <small class="error">
                    <?php echo $errors['password'] ?? '' ?>
                </small>
            </div>

            <div>
                <label for="">Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="confirm password" value="<?php echo htmlspecialchars($_POST['confirm_password'] ?? '') ?>">
                <small class="error">
                    <?php echo $errors['confirm_password'] ?? '' ?>
                </small>
            </div>

            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>

</html>