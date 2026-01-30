<?php
    // clean the input
    $firstName = filter_input(INPUT_GET, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS); //i believe this changes special characters to their unicode??
    $lastName = filter_input(INPUT_GET, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_GET, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    //serverside validation because NOTE: users can use inspect element to bypass stuff like the required field

    $errors = [];

    if($firstName == null || $firstName == "") //if empty
    {
        $errors[] = "AHHHHHH first name was required...";
    }
    if($lastName == null || $lastName == "") //empty
    {
        $errors[] = "AHHHHHH last name was required...";
    }

    if($email == null || $email == "") //empty
    {
        $errors[] = "AHHHHHH email was required...";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) //proper email formatting
    {
        $errors[] = "AHHHHHH email was not proper format...";
    }

    if($message == null || $message == "") //empty
    {
        $errors[] = "AHHHHHH message was required...";
    }

    //runs if the errors list isn't empty (ie: there are errors)
    if(!empty($errors))
    {
        echo "<h1>ERROR:</h1>";

        //display each error in an unordered list
        foreach($errors as $error):
            echo "<li>" . $error . "</li>";
        endforeach;

        echo "<h3>Please redo the form.</h3>";

        //stop the rest of the script from executing
        exit;
    }
?>

<main>
    <!-- form sent message -->
    <?php echo "
        <h2>Thanks for your message, " . $firstName . " " . $lastName . "!!!</h2>
        <h3>An email has been sent to <em>" . $email . "</em>.</h3>"; ?>
</main>
