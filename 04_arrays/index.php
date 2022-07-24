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



<hr/>
<a href="../index.php">index</a>
</body>

</html>