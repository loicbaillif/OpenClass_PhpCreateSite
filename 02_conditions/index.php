<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Conditions</title>
</head>

<body>
<h1>Conditions</h1>
<hr />
<h2>if ... else (a.k.a. bread ... butter)</h2>
<p>

<?php
$is_enabled = true;
if ($is_enabled) {
    echo 'You are authorized to access this website.✅<br/>' . PHP_EOL;
} else {
    echo 'Access denied. ❌<br/>' . PHP_EOL;
}

$user_satisfied = "Maybe";
if ($user_satisfied == "Yes") {
    echo 'I\'m glad you are a satisfied user.<br />' . PHP_EOL;
} elseif ($user_satisfied == "No") {
    echo 'I will do my best to satisfy you in the future.<br/>' . PHP_EOL;
} else {
    echo 'Choosing means eliminating<br/>' . PHP_EOL;
}


?>

</p>



<hr/>
<a href="../index.php">index</a>
</body>

</html>