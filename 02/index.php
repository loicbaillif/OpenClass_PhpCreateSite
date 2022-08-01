<?php
// Document variables:
$chapter = 02;
$pageTitle = 'Conditions';
$mainTitle = 'Conditions';
?>

<!DOCTYPE html>
<html lang="en">

<?php include('../99/head.php'); ?>

<body>
<?php include('../99/bodyHeader.php'); ?>


<h2>if ... else (a.k.a. bread ... butter)</h2>
<p>

<?php
$isEnabled = true;
if ($isEnabled) {
    echo 'You are authorized to access this website.✅<br/>' . PHP_EOL;
} else {
    echo 'Access denied. ❌<br/>' . PHP_EOL;
}

$userSatisfied = "Maybe";
if ($userSatisfied == "Yes") {
    echo 'I\'m glad you are a satisfied user.<br />' . PHP_EOL;
} elseif ($userSatisfied == "No") {
    echo 'I will do my best to satisfy you in the future.<br/>' . PHP_EOL;
} else {
    echo 'Choosing means eliminating<br/>' . PHP_EOL;
}

$recipePublished = true;
$isOwner = false;
$isAdmin = false;

if (($recipePublished && $isOwner) || $isAdmin) {
    echo 'You can edit this recipe.<br/>' . PHP_EOL;
} else {
    echo 'You are not allowed to edit this recipe.<br/>' . PHP_EOL;
}

$isVeggie = true;

?>
</p>

<?php if ($isVeggie): ?>
    <h3>List of veggie recipes</h3>
<?php else: ?>
    <h3>List of meat BBQ</h3>
<?php endif; ?>


<h2>switch Condition (a.k.a. jam)</h2>
<p>
<?php
$nbIngredients = "bob";

switch ($nbIngredients)
{
    case 0:
        echo "Come on ... be serious.";
        break;

    case 1:
        echo "1 ingredient only? meringue maybe ...";
        break;

    case 2:
        echo "We can prepare an ice-cream with 2 ingredients.";
        break;

    case 3:
        echo "Pancakes party!";
        break;

    case 4:
        echo "Classic King, chocolate cake. Four ingredients for happiness.";
        break;

    case 5:
        echo "Let's bake a Pavlova.";
        break;

    default:
        echo "You can be imaginative with all those ingredients.";
}


?>
</p>


<h2>Ternary Operator</h2>
<?php
$userAge = 16;
echo 'You are ... ' . ($userAge >= 18 ? 'Adult' : 'Minor');

?>


<?php include('../99/bodyFooter.php'); ?>
</body>

</html>