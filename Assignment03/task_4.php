<?php

## Task 4: Multidimensional Array
// Create a multidimensional array called $studentGrades to store the grades of three students.
// Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrades = [
    [
        'Math' => 85,
        'English' => 92,
        'Science' => 78
    ],
    [
        'Math' => 88,
        'English' => 94,
        'Science' => 76
    ],
    [
        'Math' => 92,
        'English' => 85,
        'Science' => 84
    ]
];

function calculateAndPrintAverageGrade($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $averageGrade = array_sum($grades) / count($grades);
        echo "Student " . ($student + 1) . " has obtained average grade: " . $averageGrade . "\n";
    }
}

calculateAndPrintAverageGrade($studentGrades);
