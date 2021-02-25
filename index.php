<?php
declare(strict_types=1);
include 'includes/autoloader.inc.php';

$errors = [
    ['title_error' => "",
        'date_error' => "",
        'authorName_error' => "",
        'content_error' => "",
    ]
    ];
  $userInput = [
      ['title' => "",
          'date' => "",
          'authorName' => "",
          'content' => "",
      ]
  ];

if(isset($_REQUEST['title'])) {
$file = 'saveContent.txt';
$str = $_POST['title'] . "\n";
$temp = file_get_contents($file);
$content = $str.$temp;
file_put_contents($file, $content);

// echo success message
echo "Saved to $file successfully!";
echo "<br>";
echo "Previous messages:";
echo "<hr>";

// print out previous posts
$file = file_get_contents('saveContent.txt');
}



function modified_input($input): string
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control">
            <span></span>
        </div>
        <div class="form-group col-md-6">
            <label for="content">Content:</label>
            <input type="text" name="content" class="form-control">
            <span></span>
        </div>
        <div class="form-group col-md-6">
            <label for="authorName">Your name:</label>
            <input type="text" name="authorName" class="form-control">
            <span></span>
        </div>
        <button type="submit" class="btn btn-primary">Send!</button>
</form>
</body>
</html>
