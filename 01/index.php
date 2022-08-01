<?php
// Document variables:
$chapter = 01;
$pageTitle = 'PHP Variables';
$mainTitle = 'PHP Variables';
?>

<!DOCTYPE html>
<html lang="en">

<?php include('../99/head.php'); ?>

<body>
<?php include('../99/bodyHeader.php'); ?>


<h2>Five different variables types</h2>
<ul>
    <li>Strings: string</li>
    <li>Integers: int</li>
    <li>Floating numbers: float</li>
    <li>Boolean: bool</li>
    <li>Nothing: null</li>
</ul>
<?php
// 1) Set Variables
$userAge = 17; // camelCase recommended, int
$userName = "John Doe"; // string
$userEmail = "john.doe@somemail.com"; // string
$temperature = 37.2; // float
$isAuthor = false; // bool
$isAdmin = true; // bool
$noValue = NULL; // NULL

echo "<h2>Display Variables</h2>\n<p>\n";
// 2) Display Variables
echo $userName . ': ' . $userAge . ' years old.<br />'; // Concatenate with ' '
echo "$userName, we registered your email address: $userEmail"; // and with " "
echo "</p>";
?>

<h2>Basic maths operations</h2>
<ul>
    <?php
    $number1 = 18;
    $number2 = 6;
    echo '<li>' . $number1 . ' + ' . $number2 . ' = ';
    echo $number1 + $number2 . '</li>';
    echo '<li>' . $number1 . ' - ' . $number2 . ' = ';
    echo $number1 - $number2 . '</li>';
    echo '<li>' . $number1 . ' * ' . $number2 . ' = ';
    echo $number1 * $number2 . '</li>';
    echo '<li>' . $number1 . ' / ' . $number2 . ' = ';
    echo $number1 / $number2 . '</li>';
    echo '<li>' . $number1 . ' % ' . $number2 . ' = ';
    echo $number1 % $number2 . '</li>';


    ?>
</ul>

<?php include('../99/bodyFooter.php'); ?>
</body>

</html>