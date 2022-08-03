<?php
// Document variables:
$chapter = 07;
$pageTitle = 'Data from URL';
$mainTitle = 'Get user request from data in URL';
include_once('../99/funcGlobal.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('../99/head.php'); ?>

<body>
<h1>Treat form</h1>
<hr/>
<h2>Data received:</h2>
<?php
if (
    !isset($_GET['email'])
    || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)
    // || !isset($_GET['firstName']) redundant, removed
    || empty($_GET['firstName'])
    // || !isset($_GET['lastName']) redundant, removed
    || empty($_GET['lastName'])
)
{
    echo 'required values not provided. Please check.';
    return;
}

?>
<ul>
    <li>Email: <?php echo getValueString('email', $_GET); ?></li>
    <li>First Name: <?php echo getValueString('firstName', $_GET); ?></li>
    <li>Last Name: <?php echo getValueString('lastName', $_GET); ?></li>
</ul>




<hr/>
<footer><a href="index.php">Return to form</a>
</body>

</html>