<?php
$text = 'Hello World!';
# substr()
# Returns a portion of the string
$output = substr($text, 1, 3);
$output = substr($text, -2);

# strlen()
# Returns the length of the string
$output = strlen($text);

# strpos()
# Finds the position of the first occurrence of a sub string 
$output = strpos($text, "lo");

# strrpos()
# Finds the position of the last occurrence of a sub string 
$output = strrpos($text, "l");

# trim()
# Strips white spaces
$text = "Hello World                               ";
// var_dump($text);
$output = trim($text);

# strtoupper()
# Makes all characters uppercase
$text = 'Hello World!';
$output = strtoupper($text);

# strtolower()
# Makes all characters lowercase
$output = strtolower($text);

# ucwords()
# Capitalize every word in the string
$text = 'hello world!';
$output = ucwords($text);

# str_replace()
# Replaces every occurrence of the sub string with a replacement
$output = str_replace('world', 'everyone', $text);

# is_string()
# Check if string
$output = is_string($text);
// $values = array(true, false, null, 22, '22', 'abc', 33.5, '22.5', ' ', '', 0, '0');
// foreach ($values as $value) {
//     if (is_string($value)) {
//         echo "-{$value}- is a string.<br>";
//     }
// }

# gzcompress()
# Compress a string
$text = "Nationwide, this is a tough time to be a job seeker — the U.S. unemployment rate remains high at 8.6% — 
but prospects vary widely depending on where you live.
That’s visible both in state jobless rates, which in August ranged from a low of 4.0% in Nebraska to a high of 
13.2% in Nevada, and in workers’ confidence levels, according to LinkedIn’s latest Workforce Confidence Index survey, 
which gauges respondents’ confidence in their current job opportunities, financial expectations and career outlook on 
a scale from -100 to +100.
The Index found that job seekers in Missouri, Maryland, Virginia and Texas are relatively upbeat compared to other 
states across the U.S. With the exception of Missouri (+33), job seekers in these states are still less confident 
than professionals in the U.S. overall (+31). However, they still pull ahead of those looking for jobs in other states.
Job seekers in some of the most populous states — such as California (+11), New York (+9) and Florida (+8) — 
report markedly lower confidence. And in Oregon (-4), job seeker confidence is outright negative.";

$output = gzcompress($text);
var_dump($output);
$output = gzuncompress($output);
echo "<br><br>";
var_dump($output);
