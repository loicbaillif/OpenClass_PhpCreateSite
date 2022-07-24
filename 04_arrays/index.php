<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Arrays</title>
</head>

<body>
<h1>Arrays</h1>
<hr/>
<h2>Indexed Arrays</h2>
<?php
// First method:
$recipes1 = ['pudding', 'pizza', 'tika masala', 'pancake', 'gazpacho'];
// Second method:
$recipes2 = array('ice cream', 'carrot cake', 'custard', 'cheesecake');
// Adding elements:
$recipes2[] = 'Caesar Salad';

// Displaying elements:
?>
<h3>Recipes 1</h3>
<ul>
<?php for ($i = 0; $i < sizeof($recipes1); $i++): ?>
<li><?php echo $recipes1[$i]; ?></li>
<?php endfor; ?>
</ul>

<h3>Recipes 2</h3>
<ul>
<?php for ($cpt = 0; $cpt < sizeof($recipes2); $cpt++): ?>
<li><?php echo $recipes2[$cpt]; ?></li>
<?php endfor; ?>
</ul>


<hr class="subchapter"/>
<h2>Associative Arrays</h2>

<?php
$recipe = [
    'title' => 'French cassoulet',
    'recipe' => 'Step 1: buy sausages<br/>Step 2: bake beans ...',
    'author' => 'johndoe@somemail.com',
    'enabled' => true,
];

?>
<p>This time, key will be explicit, and can be a string<br />
    Displaying an associative array values:</p>
<ul>
    <li>recipe['title'] = <?php echo $recipe['title'] . PHP_EOL; ?></li>
    <li>recipe['recipe'] = <?php echo $recipe['recipe'] . PHP_EOL; ?></li>
    <li>recipe['author'] = <?php echo $recipe['author'] . PHP_EOL; ?></li>
    <li>recipe['enabled'] = <?php echo $recipe['enabled'] . PHP_EOL; ?></li>
</ul>


<hr class="subchapter"/>
<h2>Going through arrays</h2>
<p>Three possible methods:</p>
<ol>
    <li>for (loop)</li>
    <li>foreach (loop)</li>
    <li>print_r (method, mainly for debugging)</li>
</ol>

<?php
$recipes = [
    ['pudding', '[...]', 'user323@somemail.com', true],
    ['pizza', '[...]', 'vivitalia@somemail.com', false],
    ['tika masala', '[...]', 'userfromuk@somemail.com', true],
    ['pancake', '[...]', 'usadelicacies@somemail.com', false],
    ['gazpacho', '[...]', 'holaespana@somemail.com', true]
];


?>

<h3>for (loop)</h3>
<p>Displaying recipes array using for loop:</p>
<ul>
    <?php for($cpt = 0; $cpt < sizeof($recipes1); $cpt++): ?>
    <li># <?php echo $recipes[$cpt][0]; ?></li>
    <?php endfor; ?>
</ul>

<hr/>
<a href="../index.php">index</a>
</body>

</html>