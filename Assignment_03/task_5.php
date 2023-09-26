<?php

## Task 5: Password Generator
// Create a PHP function called generatePassword ($length) that generates a random password of the specified length.
// The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+).
// Write a PHP program to generate a password with a length of 12 characters using this function and print the password.

function generatePassword($length) {
    $password = '';
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $charactersLength = strlen($characters);
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;
}


$password = generatePassword(12);
echo "{$password}\n";
