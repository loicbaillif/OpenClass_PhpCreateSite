<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="../style.css">
    <title>First PHP<?php // code ?></title>
</head>

<body>
<h1 <?php // Some code to attribute dynamically a class ?>>OpenClassrooms</h1>
<hr />
<h2>First PHP Script</h2>
<p>
    Some HTML code is included in this page <br/>
    Hello <?php /* Some first name to introduce here */
    echo "<strong>nickname</strong><br />";
    ?> !
    Few tests here-below
</p>

<ul>
    <li style="color: blue;">Blue text</li>
    <li style="color: red;">Red text</li>
    <li style="color: green;">Green text</li>
    <?php echo "<li style=\"color: lime;\">PHP text</li>" ?>
</ul>

<p>
    <?php
    // Again and again PHP Code
    echo "First PHP text written on " . date("d/m/Y h:i:s") . "<br/>";
    ?>
</p>

<hr />
<a href="../index.php">index</a>
</body>


</html>
