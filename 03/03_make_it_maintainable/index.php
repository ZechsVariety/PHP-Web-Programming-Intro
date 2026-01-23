<?php
/* What's the Problem? 
    - PHP logic + HTML in one file
    - Works, but not scalable
    - Repetition will become a problem

    How can we refactor this code so it’s easier to maintain?
*/

$items = ["Home", "About", "Contact"];

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "includes/header.php"?>
    </head>
    <body>
        <h1>Welcome</h1>

        <?php include "includes/navigation.php"?>

        <footer>
            <?php include "includes/footer.php"?>
        </footer>

    </body>
</html>

<!-- I learned how a foreach statement works in php -->
