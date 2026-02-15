<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Awesome Blog - Create Post</title>

        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>

    <body>
        <?php require "includes/header.php"; ?>
    
        <!-- 5 padding -->
        <main class="container">
            <div class="container border mb-3">
                <h3 class="m-3">Create a Post</h3>

                <form action="process.php" method="post">
                    <!-- mb is margin bottom -->
                    <div class="input-group mb-3">
                        <label for="title" class="input-group-text">Post Title</label>
                        <input type="text" id="title" name="title" maxlength="100" required class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <label for="content" class="input-group-text">Content</label>
                        <textarea id="content" name="content" maxlength="1000" required placeholder="Enter Text Here..." class="form-control"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <label for="mainTag" class="input-group-text">Main Tag</label>
                        <input type="text" id="mainTag" name="mainTag" maxlength="100" required placeholder="Ex: #art" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Post</button>
                </form>
            </div>

            <p>
                <!-- bootstrap documentation says to give a's that act as buttons "role="button"" for the sake of screenreaders and stuff https://getbootstrap.com/docs/5.3/components/buttons/#button-tags -->
                <a href="blog.php" role="button" class="btn btn-secondary btn-sm mb-3">View Blog Posts</a>
            </p>
        </main>
    </body>
</html>
