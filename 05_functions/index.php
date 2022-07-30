<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Functions</title>
</head>

<body>
<h1>Functions</h1>
<hr/>

<h2>Call function</h2>
<p class="code">
    someFunction(); // will call a function <br/>
    someFunction($age); // will call a function, giving it parameter $age <br/>
</p>

<hr class="subchapter"/>

<h2>Get return value from a function</h2>
<p>
    Some functions don't return any value. For the other ones, we can
    store the returned value in a variable. A function can return
    only one parameter. This may be bypassed by returning an array.
</p>

<hr class="subchapter"/>

<h2>PHP built-in functions</h2>
<p>
    List of PHP built-in functions is
    <a href="https://www.php.net/manual/en/funcref.php">here</a>. <br/>
    The documentation is sufficient to get the definition and some examples,
    as well as discussions which can provide some tips. <br/>
    It is very unlikely needed to seek for another source.
</p>

<hr class="subchapter"/>

<h2>Handle strings with built-in functions</h2>
<p>
    We will work with the following sentence:<br/>
    <em>My taylor is rich.</em>
</p>
<?php $testString = 'My taylor is rich.'; ?>
<h3>strlen(): calculate the size of a string</h3>

<p>
<span class="code">strlen('My taylor is rich');</span><br />
==> This sentence has <?php echo strlen($testString); ?> characters.
</p>

<hr class="lv3"/>
<h3>str_replace(): replace all occurrences of a string by another</h3>
<p>Requires 3 arguments:</p>
<ol>
    <li>The string we are looking for</li>
    <li>The string which will replace 1</li>
    <li>The string in which we will do this replacement</li>
</ol>
<span class="code">str_replace(" ", "_", 'My taylor is rich');</span><br/>
==> <?php echo str_replace(" ", "_", $testString); ?>

<hr class="lv3"/>
<h3>sprintf(): format a string</h3>
<p>
    Similar to java printf() function; </p>
    <ul>
    <?php
    $stringToFormat = 'We have %d %s in the %s';
    $apartmentFurniture = [
            [4, 'chairs', 'living-room'],
            [1, 'bed', 'parental room'],
            [3, 'wardrobes', 'dressing room'],
    ];
    foreach ($apartmentFurniture as $roomListing): ?>
        <li>
        <?php
            echo sprintf(
                $stringToFormat,
                $roomListing[0],
                $roomListing[1],
                $roomListing[2]);
        ?>
    <?php endforeach; ?>
</ul>

<hr class="lv3"/>
<h3>date(): Work with date and time</h3>
<p>This function may take a huge variety of arguments. The most commons:</p>
    <ul>
    <li><span class="code">Y</span>: year --> <?php echo date('Y'); ?></li>
    <li><span class="code">m</span>: month --> <?php echo date('m'); ?></li>
    <li><span class="code">d</span>: day --> <?php echo date('d'); ?></li>
    <li><span class="code">H</span>: hour --> <?php echo date('H'); ?></li>
    <li><span class="code">i</span>: minute --> <?php echo date('i'); ?></li>
</ul>

<hr class="subchapter"/>
<h2>Create own functions</h2>

<h3>First example: Check a recipe is valid</h3>
<?php
$recipes = [
    [
        'title' => 'pudding',
        'recipe' => 'Light and typically english, a nice dessert',
        'authorEmail' => 'user323@somemail.com',
        'isEnabled' => true,
    ],
    [
        'title' => 'pizza',
        'recipe' => 'fresh and basic ingredients, fun to eat. Kids love it',
        'authorEmail' => 'vivitalia@somemail.com',
        'isEnabled' => false,
    ],
    [
        'title' => 'tika masala',
        'recipe' => 'indian-based, adopted in the UK.',
        'authorEmail' => 'userfromuk@somemail.com',
        'isEnabled' => true,
    ],
    [
        'title' => 'pancake',
        'recipe' => 'For top class breakfast. Flour, eggs, milk',
        'authorEmail' => 'usadelicacies@somemail.com',
        'isEnabled' => false,
    ],
    [
        'title' => 'gazpacho',
        'recipe' => 'All you need is tomatoes, olive oil, cucumber.',
        'authorEmail' => 'holaespana@somemail.com',
        'isEnabled' => true,
    ],
];

// Define isValidRecipe() function:
function isValidRecipe(array $recipe) : bool
{
    $isValid = false;
    if (array_key_exists('isEnabled', $recipe)) {
        $isValid = $recipe['isEnabled'];
    }

    return $isValid;
}

// Use it
echo '<ul>';
foreach ($recipes as $item)
{
    echo '<li>' . $item['title'] . ' is ' . (isValidRecipe($item)? '' : 'not ');
    echo 'a valid recipe.</li>' . PHP_EOL;
}
echo '</ul>';
?>

<hr class="lv3"/>
<h3>Second example: get array of valid recipes only</h3>
<?php
function getValidRecipes(array $recipe) : array
{
    $validRecipe = [];
    foreach ($recipe as $item)
    {
        if (isValidRecipe($item)) {
            $validRecipe[] = $item;
        }
    }
    echo 'We have ' . sizeof($validRecipe) . ' valid recipes'; // debug
    return $validRecipe;
}

// use it:
$validRecipes = getValidRecipes($recipes);
echo '<pre>';
echo print_r($validRecipes);
echo '</pre>';


?>





<hr/>
<a href="../index.php">index</a>
</body>

</html>