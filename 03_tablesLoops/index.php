<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Tables and Loops</title>
</head>

<body>
<h1>Tables and Loops</h1>
<hr/>
<h2>Tables</h2>
<p>
<?php
$user0 = ['Michael', 'Andreu', 'michandreux@somemail.com', 31];
echo 'user0[0] = ' . $user0[0] . '<br/>' . PHP_EOL;
echo 'user0[1] = ' . $user0[1] . '<br/>' . PHP_EOL;
echo 'user0[2] = ' . $user0[2] . '<br/>' . PHP_EOL;
echo 'user0[3] = ' . $user0[3] . '<br/>' . PHP_EOL;

$user1 = ['Laure', 'Kibri', 'kibrila@somemail.com', 44];
$user2 = ['Vincent', 'Larose', 'vinlarose@somemail.com', 27];
$user3 = ['Anna', 'Quonda', 'qanna@somemail.com', 36];
$userTable = [$user0, $user1, $user2, $user3];


?>
</p>
<hr class="subchapter"/>

<h2>While loop</h2>
<p>
<?php
$isValid = false;
$nbIngredients = 0;
while (!$isValid) {
    echo 'You have ' . $nbIngredients . ' ingredients.<br/>' . PHP_EOL;
    if ($nbIngredients < 5) {
        // Very poor code ... but for training purpose ?>
        Not enough ingredients, add one please.<br />
        <?php
        $nbIngredients++;
        $isValid = $nbIngredients >= 5;
    }

}
echo 'You have enough ingredients, perfect!<br />' . PHP_EOL;
$nbUsers = sizeof($userTable);
echo $nbUsers;
?>
</p>

<hr class="subchapter"/>
<h2>For loop</h2>

<hr/>
<a href="../index.php">index</a>
</body>

</html>