<?php
    // parse values from form
    $title   = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS)); //trims whitespace, converts special chars to unicode
    $content = trim(filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS)); //same
    $mainTag = trim(filter_input(INPUT_POST, 'mainTag', FILTER_SANITIZE_SPECIAL_CHARS)); //also same

    //this is where any custom validation errors will be stored and displayed
    $errors = [];

    //validation

    //title
    if($title == null || $title == "") //blank
        $errors[] = "Title cannot be blank.";

    //content
    if($content == null || $content == "") //blank
        $errors[] = "Content cannot be blank.";

    //mainTag
    if($mainTag == null || $mainTag == "") //blank
        $errors[] = "Main Tag cannot be blank.";
    else if(str_contains($mainTag, " ")) //contains spaces (thanks to Don't Panic for the solution to finding if a string has any spaces: https://stackoverflow.com/questions/37142882/php-check-if-string-contains-space-between-words-not-at-beginning-or-end)
        $errors[] = "Main Tag cannot include spaces.";
    else if($mainTag[0] != "#") //if it doesn't start with a hashtag, add it automatically
        $mainTag = "#" . $mainTag;

    // if there are errors, print them and stop the script
    if (!empty($errors)) {
        echo "<h2>Could not post:</h2>
            <ul>";
        foreach ($errors as $error) { //print each error
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";

        //stop the rest of the script from happening
        exit;
    }
