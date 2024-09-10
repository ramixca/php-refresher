<?php

// Write a PHP program that computes the total cost of this restaurant meal:
// two hamburgers at 4.95 each, one chocolate milkshake at 1.95, and one cola at 0.85. The sales tax rate is 7.5%, and you left a pre-tax tip of 16%.

$hamburger = 4.95;
$milkshake = 1.95;
$cola = 0.85;
$tax_rate = 0.075;
$tip = 0.16;
$subtotal = (2 * $hamburger) + $milkshake + $cola;
$total = $subtotal + ($subtotal * $tax_rate) + ($subtotal * $tip);
print("Subtotal: $subtotal\n");

print("QTY: 2 Hamburger PRICE: $hamburger\n");
print("QTY: 1 Milkshake PRICE: $milkshake\n");
print("QTY: 1 Cola PRICE: $cola\n");
print("Subtotal: $subtotal \n");
print("Total with tax: " . number_format($total, 2) . "\n");

//Part 2. Print out a string containing first and last name separated by a space. Also print out the length of that string.

$first_name = "Ramon";
$last_name = "Gonzalo";
$full_name = $first_name . " " . $last_name;
print("Full Name: $full_name\n");
print("Length of Full Name: " . strlen($full_name) . "\n");

//use the increment operator and the combines multiplication operator to print out the numbers from 1 to 5 and powers of 2 from 2 to 32.


function incrementCount() {
    $numbers = 1;
    for ($i = 1; $i <= 5; $i++) {
        print("Number: $numbers\n");
        $numbers *= 2;
    }
}

incrementCount();

?>