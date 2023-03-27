<?php

include('./components/connections.php');
?>
<?php
if (!$_SESSION["username"]) {
    header("Location: http://localhost/bank-of-lincoln/login.php");
    echo '<script>alert("Could not be Registered")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/form.css" />
</head>

<body>
    <header class="header">
        <div class="nav">
            <div class="firstnav header-child">
                <h1>Bank of Lincoln</h1>
            </div>
            <div class="secondnav header-child">
                <i class="fas fa-user-circle"></i>
                <div class="logout">

                    <a href="./logout.php" class="logout_btn">Logout</a>
                </div>
            </div>
        </div>
    </header>