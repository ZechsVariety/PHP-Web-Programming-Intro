<?php
    require "includes/header.php";

    // i had to use get instead cause post was causing errors for some reason
    // clean the input
    $firstName = filter_input(INPUT_GET, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_GET, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
    $items = $_GET['items'] ?? []; //WHAT DOES THIS MEANNNN

    //serverside validation because NOTE: users can use inspect element to bypass stuff like the required field
    $errors = [];

    //required text fields
    if($firstName == null || $firstName == "")
    {
        $errors[] = "AHHHHHH first name was required...";
    }
    if($lastName == null || $lastName == "")
    {
        $errors[] = "AHHHHHH last name was required...";
    }

    //email
    if($email == null || $email == "")
    {
        $errors[] = "AHHHHHH email was required...";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors[] = "AHHHHHH email was not proper format...";
    }

    //address
    if($email == null || $email == "")
    {
        $errors[] = "AHHHHHH address was required...";
    }

    //check that order quanitity is a number
    $itemsOrdered[] = 0;
    foreach($items as $item => $quantity)
    {
        if(filter_var($quantity, FILTER_VALIDATE_INT) != false && $quantity > 0)
        {
            $itemsOrdered[$item] = $quantity;
        }
    }

    if(count($itemsOrdered) == 0)
    {
        $errors[] = "AHHHHHH you gotta order at least one item...";
    }

    if(!empty($errors))
    {
        foreach($errors as $error):
            echo "<li>" . $error . "</li>";
        endforeach;
    }

    //stop the script from executing
    // exit;
?>

<main>
    <?php echo "<h2>Thanks for your order............... " . $firstName . "!!! REHEHE</h2>"; ?>
    <h3>Items Ordered:</h3>
    <ul>
        <?php foreach($items as $item => $quantity): ?>
            <?php echo "<li>" . $item . " - " . $quantity . "</li>" ?>
        <?php endforeach; ?>
    </ul>
</main>

<!-- mail($to, $subject, $message) -->

<?php
    require "includes/footer.php";
?>
