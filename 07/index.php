<?php
// Document variables:
$chapter = 07;
$pageTitle = 'Data from URL';
$mainTitle = 'Get user request from data in URL';
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('../99/head.php'); ?>

<body>
<?php include_once('../99/bodyHeader.php'); ?>
<h2>Form</h2>
<form action="treatData.php" method="get">
    <div>
        <label for="email">e-Mail</label>
        <input type="email" name="email" id="email" placeholder="mail@example.com"/>
    </div>
    <div>
        <label for="firstName">Your first name</label>
        <input type="text" name="firstName" id="firstName" placeholder="John"/>
    </div>
    <div>
        <label for="lastName">Your last name</label>
        <input type="text" name="lastName" id="lastName" placeholder="Brown"/>
    </div>
    <button type="submit" class="formSubmit">Send (nowhere)</button>

</form>




<?php include('../99/bodyFooter.php'); ?>
</body>

</html>