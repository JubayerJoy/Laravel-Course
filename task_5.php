<?php

## Task 5: Password Generator
// Create a PHP function called generatePassword ($length) that generates a random password of the specified length.
// The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+).
// Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
// It should have atleast one uppercase, one lowercase, one number and one special character.

function generatePassword($length) {
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $uppercase . $lowercase . $numbers . $specialChars;

    $password = '';

    $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
    $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];

    $passwordLength = $length - 4;

    for ($i = 0; $i < $passwordLength; $i++) {
        $password .= $allChars[rand(0, strlen($allChars) - 1)];
    }

    $passwordArray = str_split($password);
    shuffle($passwordArray);
    $password = implode('', $passwordArray);
    return $password;
}


$password = generatePassword(12);
echo "{$password}\n";
