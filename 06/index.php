<?php
// Document variables:
$chapter = 06;
$pageTitle = 'Organize page';
$mainTitle = 'Organize page in functional blocks';
include_once('../99/varRecipes.php');
include_once('../99/varUsers.php');
include_once('../99/funcRecipes.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once('../99/head.php'); ?>

<body>
<?php include_once('../99/bodyHeader.php'); ?>

<?php foreach (getRecipes($recipes) as $recipe) : ?>
<article>
    <h2><?php echo getValueString('title', $recipe); ?></h2>
    <div><?php echo getValueString('recipe', $recipe); ?></div>
    <em>By <?php echo displayAuthor(getValueString('eMail', $recipe), $users); ?></em>
</article>

<?php endforeach ?>



<?php include('../99/bodyFooter.php'); ?>
</body>

</html>