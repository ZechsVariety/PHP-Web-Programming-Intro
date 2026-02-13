<?php
//TODO:
require "includes/connect.php";

/*
  TODO:
  1. Write a SELECT query to get all subscribers
  2. Add ORDER BY subscribed_at DESC
  3. Prepare the statement
  4. Execute the statement
  5. Fetch all results into $subscribers
*/

//1, 2
$sql = "SELECT * FROM subscribers ORDER BY subscribed_at DESC";

//3
$stmt = $pdo->prepare($sql);

//4
$stmt->execute();

//5
$subscribers = $stmt->fetchAll();
?>

<main class="container mt-4">
  <h1>Subscribers</h1>

  <?php if (count($subscribers) === 0): ?>
    <p>No subscribers yet.</p>
  <?php else: ?>
    <table class="table table-bordered mt-3">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Subscribed</th>
        </tr>
      </thead>
      <tbody>
        <!-- TODO: Loop through $subscribers and output each row -->
         <?php
            foreach($subscribers as $sub => $quantity) //=> $quanitity is for associative arrays like this because each value isn't indexed by a number but by a name instead
            {
              echo("<p>" . $subscribers[$sub][0] . " | " . $subscribers[$sub][1] . " | " . $subscribers[$sub][2] . " | " . $subscribers[$sub][3] . " | " . $subscribers[$sub][4] . "</p>");
            }
         ?>
      </tbody>
    </table>
  <?php endif; ?>

  <p class="mt-3">
    <a href="index.php">Back to Subscribe Form</a>
  </p>
</main>

<?php //require "includes/footer.php"; ?>
