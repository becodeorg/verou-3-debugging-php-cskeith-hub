<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong

// echo "Exercise 1 starts here:";

$x = 0; // Defined $x
function new_exercise($x) // passing $
{
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>"; // $x was not defined
    echo $block;
}; // close function with ;

new_exercise(1); // I had to call the function


new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; // monday is on index 0 in $week

echo $monday;

new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = 'Debugged ! Also very fun';
echo substr($str, 0, 24);// its only showing the 10 characters insted of 24 withs give the whole string

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it
// Bonus: can you fix it with changing just one character? (hard)

foreach($week as &$day) // i added & probley to call $day in the loop ?
{
    $day = substr($day, 0, -3);
}
print_r($week);

new_exercise(5);
// === Exercise 5 ===
// The result should be: "Copyright © <current year> - BeCode"

function copyright($year) // i removed the INT its a typehint ?
{
    print "&copy; $year BeCode";
}
//print the copyright
copyright(date('Y'));


