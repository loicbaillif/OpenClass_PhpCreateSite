<?php
// Document variables:
$chapter = 03;
$pageTitle = 'Tables and Loops';
$mainTitle = 'Tables and Loops';
?>

<!DOCTYPE html>
<html lang="en">

<?php include('../99/head.php'); ?>

<body>
<?php include('../99/bodyHeader.php'); ?>


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
$userStructure = ['First Name: ', 'Last Name: ', 'e-mail: ', 'Age: '];


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

<?php
for ($cpt = 0; $cpt < $nbUsers; $cpt++):
?>
<h3>User <?php echo $cpt; ?>:</h3>
<ul>
    <?php
    for ($userData = 0; $userData < sizeof($userStructure); $userData++):
    ?>
    <li>
        <?php
        echo $userStructure[$userData] . $userTable[$cpt][$userData];
        ?>
    </li>
    <?php endfor; ?>

</ul>
<?php endfor; ?>



<?php include('../99/bodyFooter.php'); ?>
</body>

</html>