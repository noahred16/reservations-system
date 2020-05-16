<?php
// Here we check whether the user got to this page by clicking the proper signup button.
if (isset($_POST['login-submit'])) {

  // We include the connection script so we can use it later.
  // We don't have to close the MySQLi connection since it is done automatically, but it is a good habit to do so anyways since this will immediately return resources to PHP and MySQL, which can improve performance.
  require 'dbh.php';

  // We grab all the data which we passed from the signup form so we can use it later.
  $firstName = "Noah";
  $lastName = "Smith";
  $email = "nosmith16@gmail.com";
  $password = "password123";
  $accessLvl = "pro-shop";
//   $email = $_POST['mail'];
//   $password = $_POST['pwd'];


  // We check for any empty inputs. (PS: This is where most people get errors because of typos! Check that your code is identical to mine. Including missing parenthesis!)
  if (empty($email) || empty($password)) {
    header("Location: ../index.php?error=emptyfields&uid=".$email);
    exit();
  }
  else {
//       firstName
// lastName
// emailUsers
// pwdUsers

        // $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?);";
        $sql = "INSERT INTO users (firstName, lastName, emailUsers, pwdUsers, access) VALUES (?, ?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../index.php?error=sqlerror");
          exit();
        }
        else {

          // If there is no error then we continue the script!

          // Before we send ANYTHING to the database we HAVE to hash the users password to make it un-readable in case anyone gets access to our database without permission!
          // The hashing method I am going to show here, is the LATEST version and will always will be since it updates automatically. DON'T use md5 or sha256 to hash, these are old and outdated!
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          // Next we need to bind the type of parameters we expect to pass into the statement, and bind the data from the user.
          mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $hashedPwd, $accessLvl);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
          header("Location: ../index.php?signup=success");
          exit();

        }
    
  }
  // Then we close the prepared statement and the database connection!
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  // If the user tries to access this page an inproper way, we send them back to the signup page.
  header("Location: ../signup.php");
  exit();
}
