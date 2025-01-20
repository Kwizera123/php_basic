<?php

function greetUserWithTime($name, $greeting = "Good Morning"){
  echo "{$greeting} {$name}\n";
}

  greetUserWithTime("Sinapy");
  echo "<br>";
  greetUserWithTime("Kwizera","Good Evening");

?>