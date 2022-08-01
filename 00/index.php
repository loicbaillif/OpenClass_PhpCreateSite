<?php
// Document variables:
$chapter = 00;
$pageTitle = 'First PHP script';
$mainTitle = 'Organize page in functional blocks';
?>

<!DOCTYPE html>
<html lang="en">

<?php include('../99/head.php'); ?>

<body>
<?php include('../99/bodyHeader.php'); ?>


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


<?php include('../99/bodyFooter.php'); ?>
</body>


</html>
