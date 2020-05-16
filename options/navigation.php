<?php


if (isset($_POST['home'])) {
    $page = "home";
}
else if (isset($_POST['schedule'])) {
    $page = "schedule";
}
else if (isset($_POST['reservations'])) {
    $page = "reservations";
}
else if (isset($_POST['members'])) {
    $page = "members";
}
else if (isset($_POST['list'])) {
    $page = "list";
}
else if (isset($_POST['logout'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
}

header("Location: ../index.php?menu=".$page);
