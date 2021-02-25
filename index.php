<?php
declare(strict_types=1);
include 'includes/autoloader.inc.php';



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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <title>guestbook</title>
</head>
<body>
<form method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control"
                   value="">
            <span></span>
        </div>
        <div class="form-group col-md-6">
            <label for="date">Date:</label>
            <input type="text" name="Date" class="form-control"
                   value="">
            <span></span>
        </div>
        <div class="form-group col-md-6">
            <label for="content">Content:</label>
            <input type="text" name="content" class="form-control"
                   value="">
            <span></span>
        </div>
        <div class="form-group col-md-6">
            <label for="authorName">Author Name:</label>
            <input type="text" name="authorName" class="form-control"
                   value="">
            <span></span>
        </div>

</form>
</body>
</html>
