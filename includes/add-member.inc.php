<?php

//https://stackoverflow.com/questions/4356289/php-random-string-generator
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// $password = generateRandomString();
$password = "ilovenoah";
// $password = "[put password here]";


if (isset($_POST['add-submit'])){
    
    //fix
    $dBServername = "localhost";
    $dBUsername = "racquetc";
    $dBPassword = "mv5OTpXhgFEThPj27dmx";
    $dBName = "racquetc_system_db";
    
    $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);
    


    $nameF = $_POST['firstName'];
    $nameL = $_POST['lastName'];
    $email = $_POST['mail'];
    $access = $_POST['access'];
    
    // We check for any empty inputs.
    if (empty($nameF) || empty($nameL) || empty($email)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "INSERT INTO users (firstName, lastName, emailUsers, pwdUsers, access) VALUES (?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../index.php?error=sqlerror");
          exit();
        }
        else{
            //Latest hashing method that makes password un-readable in the database.
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            // bind the type of parameters we expect to pass into the statement, and bind the data from the user.
            mysqli_stmt_bind_param($stmt, "sssss", $nameF, $nameL, $email, $hashedPwd, $access);
            mysqli_stmt_execute($stmt);
            header("Location: ../index.php?signup=success");
            exit();
        }
    }
    // Then we close the prepared statement and the database connection!
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../index.php");
    // header("Location: ../index.php?error=emptyfields&uid=".$email);
    exit();
}

