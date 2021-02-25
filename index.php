<?php
declare(strict_types=1);
include 'includes/autoloader.inc.php';

$errors = [
    'title_error' => "",
    'authorName_error' => "",
    'content_error' => "",
];
$userInput = [
    'title' => "",
    'authorName' => "",
    'content' => "",
];

if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['submit'])) {
    if (empty($_POST["title"])) {
        $errors['title'] = "* input required";
    } elseif (!empty($_POST['title']) && is_numeric($_POST['title'])) {
        $errors['title'] = "* text characters only";
}
else {
        $userInput['title'] = modified_input($_POST['title']);
    }

    if (empty($_POST["content"])){
        $errors['content'] = "* input required";
    }
    else {
        $userInput['content'] = modified_input($_POST['content']);
    }

    if (empty($_POST["name"])){
        $errors['content'] = "* input required";
    }
    elseif (!empty($_POST['name']) && is_numeric($_POST['name'])) {
        $errors['name'] = "* text characters only";
    } else {
        $userInput['name'] = modified_input($_POST['name']);
    }
}

if (isset($_POST['submit'])) {
    $post = new Post($_POST['title'],date('Y-m-d H:i:s'),$_POST['content'],$_POST['authorName']);
    $postLoader = new PostLoader();
    $postLoader->storeAndLoadMessages($post);
}

function modified_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>guestbook</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control">
            <span><?php ?></span>
        </div>
        <div class="form-group col-md-6">
            <label for="content">Content:</label>
            <input type="text" name="content" class="form-control">
            <span><?php ?></span>
        </div>
        <div class="form-group col-md-6">
            <label for="authorName">Your name:</label>
            <input type="text" name="authorName" class="form-control">
            <span><?php ?></span>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Send!</button>
</form>
</body>
</html>
