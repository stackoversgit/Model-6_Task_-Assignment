<?php 

// Input or assign subject marks
$physics = 85;
$chemistry = 78;
$biology = 87; 
$math = 92;
$programming = 96;


// Function to display the result
function result() {
    // Using global variables inside the function
    global $physics, $chemistry, $biology, $math, $programming;

    // Checking marks for validity (0-100 Range)
    if ($physics < 0 || $chemistry < 0 || $biology < 0 || $math < 0 || $programming < 0 || 
        $physics > 100 || $chemistry > 100 || $biology > 100 || $math > 100 || $programming > 100) {
        return "Warning! Invalid Number: (Ensure marks within 0-100 range)";
    }

    // Check if any subject is below 33
    if ($physics < 33 || $chemistry < 33 || $biology < 33 || $math < 33 || $programming < 33) {
        return "Result: <br> Grade: F"; 
    }

    // Total marks calculation
    $totalMarks = $physics + $chemistry + $biology + $math + $programming; 

    // Average marks calculation
    $average = sprintf("%.2f", $totalMarks / 5);


    
    // Grade calculation using switch-case based on the average marks
    switch (true) {
        case ($average >= 80 && $average <= 100):
            $grade = "A+";
            break;
        case ($average >= 70 && $average <= 79):
            $grade = "A";
            break;
        case ($average >= 60 && $average <= 69):
            $grade = "A-";
            break;
        case ($average >= 50 && $average <= 59):
            $grade = "B";
            break;
        case ($average >= 40 && $average <= 49):
            $grade = "C";
            break;
        case ($average >= 33 && $average <= 39):
            $grade = "D";
            break;
        default:
            $grade = "Invalid"; 
            break;
    }

    // Return the output of result
    return "Result: <br>Total Marks: " . $totalMarks . "<br>" .
           "Average Marks: " . $average . "<br>" .
           "Grade: " . $grade . "<br>";
}

// Call the function to display output
echo result();


