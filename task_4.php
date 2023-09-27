<?php

## Task 4: Multidimensional Array
// Create a multidimensional array called $studentGrades to store the grades of three students.
// Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
// Should print A+, A, A-, B, C, F depending on the average grade.

$studentGrades = [
    [
        'Math' => 100,
        'English' => 92,
        'Science' => 78
    ],
    [
        'Math' => 88,
        'English' => 94,
        'Science' => 76
    ],
    [
        'Math' => 42,
        'English' => 45,
        'Science' => 30
    ]
];

$grades = [
    'A+' => 80,
    'A' => 70,
    'A-' => 60,
    'B' => 50,
    'C' => 40,
    'F' => 0
];

function calculateAverageGrade($studentGrades) {
    $studentAverageGrades = [];

    foreach ($studentGrades as $student => $grades) {
        $averageGrade = array_sum($grades) / count($grades);
        $studentAverageGrades[$student] = $averageGrade;        
    }
    return $studentAverageGrades;
}

function calculateAndPrintAverageGrade($studentGrades) {
    $studentAverageGrades = calculateAverageGrade($studentGrades);
    global $grades;

    foreach ($studentAverageGrades as $student => $averageGrade) {
        foreach ($grades as $grade => $minGrade) {
            if ($averageGrade >= $minGrade) {
                echo "$student: $grade\n";
                break;
            }
        }
    }
}

calculateAndPrintAverageGrade($studentGrades);
