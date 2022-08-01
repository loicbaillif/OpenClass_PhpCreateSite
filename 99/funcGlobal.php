<?php

function getValueString(string $key, array $givenArray) : string
{
    // Return the value of the key if it exists, "N/A" elsewhere
    if (array_key_exists($key, $givenArray))
    {
        return $givenArray[$key] !== '' ? $givenArray[$key] : 'N/A';
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