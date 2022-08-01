<?php
// Document variables:
$chapter = 04;
$pageTitle = 'Arrays';
$mainTitle = 'Work with Arrays';
?>

<!DOCTYPE html>
<html lang="en">

<?php include('../99/head.php'); ?>

<body>
<?php include('../99/bodyHeader.php'); ?>


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
<p>Requires two arguments:</p>
<ol>
    <li>The key we look for.</li>
    <li>The array in which looking for it.</li>
</ol>
<p>
<span class="code">array_key_exists('keyWeWant', $array)</span><br/>
It will return a boolean.
</p>
<?php
$recipes4 = [
    'title' => 'Caesar Salad',
    'recipe' => '1) Cut the salad<br/>2) prepare the sauce<br/>3) ...',
    'author' => 'juliusc@somemail.com',
];
if (! (array_key_exists('author', $recipes4))) {
    echo '<p>We don\'t record the authors.</p>' . PHP_EOL;
} elseif (array_key_exists('title', $recipes4)) {
    echo '<p>We record both authors and titles for recipes.</p>';
    echo PHP_EOL;
} else {
    echo '<p>This is not an anonymous recipe.</p>' . PHP_EOL;
}
?>

<h3>in_array()</h3>
<p>Similar to array_key_exists, but for values. Requires two arguments:</p>
<ol>
    <li>The value we look for.</li>
    <li>The array in which looking for it.</li>
</ol>
<p>
<span class="code">in_array('valueWeWant', $array)</span><br/>
It will return a boolean.
</p>
<?php
if (in_array('juliusc@somemail.com', $recipes4)) {
    echo '<p>Julius Caesar sent us this old recipe.</p>' . PHP_EOL;
} else {
    echo '<p>Our service is not that old...</p>' . PHP_EOL;
}
if (in_array('cleopatra@somemail.com', $recipes4)) {
    echo '<p>Cleopatra exotic dishes are the best.</p>' . PHP_EOL;
} else {
    echo '<p>We are younger than the pyramids.</p>' . PHP_EOL;
}
?>

<h3>array_search()</h3>
<p>Similar to in_array(), but will return the needle index if found
or false if not found.</p>
<?php
$rainbow = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
echo '<p>';
echo 'Red is ' . (in_array('red', $rainbow) ? '' : 'not ')  . 'in rainbow';
echo in_array('red', $rainbow)
    ? ', and located at position ' . (array_search('red', $rainbow) + 1)
    : '';
echo '.' . '<br/>' . PHP_EOL;

echo 'Blue is ' . (in_array('blue', $rainbow) ? '' : 'not ')  . 'in rainbow';
echo in_array('blue', $rainbow)
    ? ', and located at position ' . (array_search('blue', $rainbow) + 1)
    : '';
echo '.' . '<br/>' . PHP_EOL;

echo 'Pink is ' . (in_array('pink', $rainbow) ? '' : 'not ')  . 'in rainbow';
echo in_array('pink', $rainbow)
    ? ', and located at position ' . (array_search('pink', $rainbow) + 1)
    : '';
echo '.' . PHP_EOL . '</p>';
?>

<hr class="subchapter"/>

<h2>Display recipes (V2)</h2>
<?php
$recipes5 = [
    [
          'title' => 'Fish and Chips',
          'recipe' => 'Start with fresh fish ...',
          'author' => 'Gordon Ramsay',
          'is_enabled' => true,
    ],
    [
        'title' => 'Cheesecake',
        'recipe' => 'To be done with Philadelphia cheese, nothing else',
        'author' => 'Starbucks',
        'is_enabled' => true,
    ],
    [
        'title' => 'Pizza',
        'recipe' => 'Tomato sauce, mozzarella, basilica. The most basic.',
        'author' => 'Super Mario',
        'is_enabled' => true,
    ],
];
?>
<h3>Displaying recipes</h3>
<?php
$nb_recipes = 0;
for ($cpt = 0; $cpt < sizeof($recipes5); $cpt++) {
    $nb_recipes += ($recipes5[$cpt]['is_enabled']);
}
?>
<?php for ($cpt = 0; $cpt < sizeof($recipes5); $cpt++) : ?>
<?php if (array_key_exists('is_enabled', $recipes5[$cpt])
    && $recipes5[$cpt]['is_enabled']) : ?>
<article>
    <h4><?php echo $recipes5[$cpt]['title']; ?></h4>
    <div><?php echo $recipes5[$cpt]['recipe']; ?></div>
    <i><?php echo 'By ' . $recipes5[$cpt]['author']; ?></i><br/>
    <?php // Adding a separator between 2 printed recipes
        if (($cpt + 1) < $nb_recipes) {
            echo '______________________________';
            }
    ?>
</article>
<?php endif; ?>
<?php endfor; ?>


<?php include('../99/bodyFooter.php'); ?>
</body>

</html>