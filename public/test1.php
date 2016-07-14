<?php

$username = "Fred Smith";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;
echo "<br>";


$oxo = (array( array('x', '', 'o'), array('o', 'o', 'x'), array('x', 'o', '') ) );

echo $oxo[1][2];
echo "<br>";


$author = "Steve Ballmer";

echo "Developers, Developers, developers, developers, developers, developers, developers, developers, developers, developers, developers!



-$author.";

echo "<br>";


$new_author = "Bill Gates";

$text = "Measuring programming progress by lines of code is like measuring aircraft building progress by weight.

- $new_author.";

echo $text;
echo "<br>";


$some_guy = "Bob";

echo <<<_END
this is a test
of the heredoc
capabilities
-$some_guy.
_END;

echo "<br>";


echo "This is line " . __LINE__ . " of file " . __FILE__;

echo "<br>";

function longdate($timestamp)
{
    $temp = date("l F jS Y", $timestamp);
    return "The date is $temp";
}

echo longdate(time());








?>