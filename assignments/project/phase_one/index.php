<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Awesome Blog - Create Post</title>
    </head>

    <body>
        <header>
            <h1>Awesome Blog</h1>
            <h3>Create a Post</h3>
        </header>

        <main>
            <form action="process.php" method="post">
                <label for="title">Post Title</label>
                <input type="text" id="title" name="title" maxlength="100">

                <label for="content">Content</label>
                <textarea id="content" name="content" maxlength="255" placeholder="Enter Text Here..."></textarea>

                <label for="mainTag">Main Tag</label>
                <input type="text" id="mainTag" name="mainTag" maxlength="100" placeholder="Ex: #art">

                <button type="submit">Post</button>
            </form>

            <p>
                <a href="blog.php">View Blog Posts</a>
            </p>
        </main>
    </body>
</html>
