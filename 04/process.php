<?php
    require "includes/header.php";

    // i had to use get instead cause post was causing errors for some reason
    $firstName = $_GET['first_name'];
    $lastName = $_GET['last_name'];
    $email = $_GET['email'];
    $items = $_GET['items'];
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
