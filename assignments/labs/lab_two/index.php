<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bake it 'Til You Make It - contact form</title>
    </head>

    <body>
        <header>
            <h1>Bake it 'Til You Make It</h1>
        </header>

        <main>
            <form action="process.php" method="get"> <!--I used get instead of post because post was causing errors-->
                <fieldset>
                    <legend>Contact Form</legend>

                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" required minlength="2"> <!--minimum length of two because i dont know anyone with a name less than 2 characters-->

                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" required> <!--no minimum incase someone wants to put their initial-->

                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email" required>

                    <!--the p element moves the text area down to a new line-->
                    <p>
                        <label for="message">Message</label><br>
                        <textarea id="message" name="message" rows="4" placeholder="Let us know your thoughts! ..." required></textarea>
                    </p>
                </fieldset>
                
                <button type="submit">Submit</button>
            </form>
        </main>
    </body>
</html>
