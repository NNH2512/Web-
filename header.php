<?php 
    session_start();
?>
<html lang="en">
<head>
    <title>MiniBank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type=text/css href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
</head>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a href="Data.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Home</a></li>
                </ul>
            </div>
            <div class="nav-login">
                  <?php
                        if (isset($_SESSION['u_id'])) {
                            echo '<form action="includes/logout.inc.php" method="POST">
                                    <button class="btn btn-primary" type="submit" name="submit">LogOut</button>
                                    </form>';
                        } else {
                            echo '<form action="includes/login.inc.php" method="post">

                                  <label for="Username">UserName: <input type="text" name="uid" placeholder="Username"></label>
                                  
                                  <label for="Password">Password: <input type="password" name="password" placeholder="Password"></label>
                                  
                                  <button class="btn btn-success" type="submit" name="submit">Login</button>
                                  </form>';
                        }
                  ?>

                <a class="btn btn-primary" href="sign_up.php" role="button">Sign Up</a>
            </div>
        </nav>
    </header>
<body>
