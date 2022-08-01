<?php


function displayAuthor(string $authorEmail, array $users) : string
{
    $firstName = 'Unknown';
    $lastName = 'User';
    $age = 123;
    for ($i = 0; $i < count($users); $i++)
    {
        $author = $users[$i];
        if (array_key_exists('eMail', $author))
        {
            if (getValueString('eMail', $author) === $authorEmail)
            {
                $firstName = getValueString('firstName', $author);
                $lastName = getValueString('lastName', $author);
                $age = getValueInt('age', $author);
                return $firstName . ' ' . $lastName . '(' . $age . ' years old)';
            }
        }
    }
    return 'user account deleted';
}


function getRecipes(array $recipes) : array
{
    $validRecipes = [];

    foreach ($recipes as $recipe)
    {
        if (isValidRecipe($recipe))
        {
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}


function getValueString(string $key, array $givenArray) : string
{
    // Return the value of the key if it exists, "N/A" elsewhere
    if (array_key_exists($key, $givenArray))
    {
        return $givenArray[$key];
    }
    else
    {
        return 'N/A';
    }
}

function getValueInt(string $key, array $givenArray) : int
{
    if (array_key_exists($key, $givenArray))
    {
        return $givenArray[$key];
    }
    else
    {
        return 0;
    }

}


function isValidRecipe(array $recipe) : bool
{
    // Check if isEnabled is a property of the array before
    // returning its value
    // If it does not exist in the array, returns false.
    $isEnabled = false;
    if (array_key_exists('isEnabled', $recipe))
    {
        $isEnabled = $recipe['isEnabled'];
    }
    return $isEnabled;
}
