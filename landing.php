<?php
session_start();
session_unset(); // remove session variables
session_destroy(); // destroy the session
session_start(); // start a fresh session
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Page</title>
    <link rel="stylesheet" href="landing-style.css">
</head>

<body>

    <div class="page-container">
        <div class="top-container">
            <header>
                <h1 class="banner-container">Welcome to Jeopardy!</h1>
            </header>

        </div>
        <form method="POST" action="index.php">
            <input type="hidden" name="form_type" value="landing">
            <div class="bottom-container">
                <div class="usernames-container">
                    <div class="user-container">
                        <p>Player 1 username:</p>
                        <input type="text" name="username1" class="username" placeholder="username">
                    </div>

                    <div class="user-container">
                        <p>Player 2 username:</p>
                        <input type="text" name="username2" class="username" placeholder="username">
                    </div>
                    <div class="user-container">
                        <p>Player 3 username:</p>
                        <input type="text" name="username3" class="username" placeholder="username">
                    </div>
                </div>
                <button type="submit" id="submit-form">Submit</button>
            </div>

        </form>
    </div>
</body>

</html>