<?php 
  
  // $GLOBALS
  // $app = "PHP CMS";
  // $APP2 = "JS CMS";

  // FUNCTION exampleFunction(){
  //   print_r($GLOBALS);
  // }

  // exampleFunction();

  //http://localhost:8888/phpbasics/superglobal_arrays.php?name=Sinapy&age=27&
  $name = $_GET["name"];
  $age = $_GET["age"];

  echo "Name: " . $name . "<br>";
  echo "Age: " . $age . "<br>";

  echo $_SERVER["SERVER_NAME"];
  echo "<br>";
  echo $_SERVER["PHP_SELF"];
  echo "<br>";
  echo $_SERVER["HTTP_USER_AGENT"];


  // $_SERVER
  // $_POST
  // $_GET
  // $_COOKIE
  // $_FILES
  // $_SESSION

  ?>