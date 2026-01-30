<?php require "includes/header.php" ?>

<!-- oops this was not what i was supposed to do... -->
<style>
  input:invalid {
    border: 2px dashed red;
  }

  input:valid {
    border: 2px solid black;
  }
</style>

<main>
  <h2> Order Online - Easy & Simple (And Totally Secure...) 🧁</h2>
  <form action="process.php" method="get">

    <!-- Customer Information -->
    <!-- step one: add client side validation with html attributes -->
    <fieldset>
      <legend>Customer Information</legend>
        <label for="first_name">First name</label>
        <input type="text" id="first_name" name="first_name" required minlength="2">
        <label for="last_name">Last name</label>
        <input type="text" id="last_name" name="last_name" required>
        <label for="phone">Phone number</label>
        <input type="text" id="phone" name="phone" placeholder="555-123-4567">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Jerma Street" required>
        <label for="email">Email address</label>
        <input type="text" id="email" name="email" required>
    </fieldset>

    <!-- Order Details -->
    <fieldset>
      <legend>Order Details</legend>

      <p>
        Enter a quantity for each item (use 0 if you don't want it).
      </p>

      <table border="1" cellpadding="8" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">Baked Treat</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Chaos Croissant 🥐</th>
            <td>
              <label for="chaos_croissant" class="visually-hidden">Chaos Croissant quantity</label>
              <input type="text" id="chaos_croissant" name="items[chaos_croissant]" min="0" max="24" value="0">
            </td>
          </tr>

          <tr>
            <th scope="row">Midnight Muffin 🌙</th>
            <td>
              <label for="midnight_muffin" class="visually-hidden">Midnight Muffin quantity</label>
              <input type="text" id="midnight_muffin" name="items[midnight_muffin]" min="0" max="24" value="0">
            </td>
          </tr>

          <tr>
            <th scope="row">Existential Éclair 🤔</th>
            <td>
              <label for="existential_eclair" class="visually-hidden">Existential Éclair quantity</label>
              <input type="text" id="existential_eclair" name="items[existential_eclair]" min="0" max="24"
                value="0">
            </td>
          </tr>

          <tr>
            <th scope="row">Procrastination Cookie ⏰</th>
            <td>
              <label for="procrastination_cookie" class="visually-hidden">Procrastination Cookie quantity</label>
              <input type="text" id="procrastination_cookie" name="items[procrastination_cookie]" min="0" max="24"
                value="0">
            </td>
          </tr>

          <tr>
            <th scope="row">Finals Week Brownie 📚</th>
            <td>
              <label for="finals_week_brownie" class="visually-hidden">Finals Week Brownie quantity</label>
              <input type="text" id="finals_week_brownie" name="items[finals_week_brownie]" min="0" max="24"
                value="0">
            </td>
          </tr>

          <tr>
            <th scope="row">Victory Cinnamon Roll 🏆</th>
            <td>
              <label for="victory_cinnamon_roll" class="visually-hidden">Victory Cinnamon Roll quantity</label>
              <input type="text" id="victory_cinnamon_roll" name="items[victory_cinnamon_roll]" min="0" max="24"
                value="0">
            </td>
          </tr>
        </tbody>
      </table>

    </fieldset>

    <fieldset>
      <legend>Additional Comments</legend>

      <p>
        <label for="comments">Comments (optional)</label><br>
        <textarea id="comments" name="comments" rows="4"
          placeholder="Allergies, delivery instructions, custom messages..."></textarea>
      </p>
    </fieldset>

    <p>
      <button type="submit">Place Order</button>
    </p>

  </form>
</main>
</body>

</html>

<?php require "includes/footer.php" ?>