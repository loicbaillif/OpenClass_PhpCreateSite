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
    <li><span class="code">for</span> (loop)</li>
    <li><span class="code">foreach</span> (loop)</li>
    <li><span class="code">print_r</span> (method, mainly for debugging)</li>
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


<h3>foreach (loop)</h3>
<p>Displaying recipes array using for loop:</p>
<ul>
<?php foreach ($recipes as $recipesElt) { ?>
    <li><?php print_r($recipesElt); ?></li>
<?php } ?>
</ul>

<?php
$recipes3 = [
    [
        'title' => 'pudding',
        'recipe' => '[...]',
        'authorEmail' => 'user323@somemail.com',
        'isEnabled' => true,
    ],
    [
        'title' => 'pizza',
        'recipe' => '[...]',
        'authorEmail' => 'vivitalia@somemail.com',
        'isEnabled' => false,
    ],
    [
        'title' => 'tika masala',
        'recipe' => '[...]',
        'authorEmail' => 'userfromuk@somemail.com',
        'isEnabled' => true,
    ],
    [
        'title' => 'pancake',
        'recipe' => '[...]',
        'authorEmail' => 'usadelicacies@somemail.com',
        'isEnabled' => false,
    ],
    [
        'title' => 'gazpacho',
        'recipe' => '[...]',
        'authorEmail' => 'holaespana@somemail.com',
        'isEnabled' => true,
    ],
];
?>
<p>Second foreach example, using array of associative arrays</p>

<?php foreach ($recipes3 as $recipes3Elt) { ?>
<ul>
    <?php foreach ($recipes3Elt as $eltProperty => $eltValue) { ?>
        <li>[<?php echo $eltProperty ?>] => <?php echo $eltValue ?></li>
    <?php } ?>
</ul>
<?php } ?>

<h3>print_r() to quickly display an array</h3>
<pre>
    <?php print_r($recipes3); ?>
</pre>

<hr class="subchapter"/>
<h2>Search in an array</h2>
<p>Three functions exist</p>
<ol>
    <li><span class="code">array_key_exists()</span> to check if a key exists in an array</li>
    <li><span class="code">in_array()</span> to check if a value exist in an array</li>
    <li><span class="code">array_search()</span> to get key from a value in an array</li>
</ol>

<h3>array_key_exists()</h3>
<p>Requires two arguments: the key we look for, the array in which looking for it.<br/>
<span class="code">array_key_exists('keyWeWant', $array)</span></p>
<?php
$recipes4 = [
    'title' => 'Caesar Salad',
    'recipe' => '1) Cut the salad<br/>2) prepare the sauce<br/>3) ...',
    'author' => 'juliusc@somemail.com',
];
if (array_key_exists('author', $recipes4)) {
    echo 'This is not an anonymous recipe.<br/>' . PHP_EOL;
} else {
    echo 'No clue who posted this recipe...<br/>' . PHP_EOL;
}

?>

<hr/>
<a href="../index.php">index</a>
</body>

</html>