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
<p>
Requires 3 arguments:
<ol>
    <li>The string we are looking for</li>
    <li>The string which will replace 1</li>
    <li>The string in which we will do this replacement</li>
</ol>
<span class="code">str_replace(" ", "_", 'My taylor is rich');</span><br/>
==> <?php echo str_replace(" ", "_", $testString); ?>
</p>

<hr class="lv3"/>

<hr/>
<a href="../index.php">index</a>
</body>

</html>