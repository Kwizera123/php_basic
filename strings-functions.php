<?php

  $str = "Hello, world";
  // echo strlen($str);
  // echo strtoupper($str);
  // echo strtolower($str);

  $pos = strpos($str, "world");
  if($pos !== false){
    // echo $pos;
  }

  $new_str = str_replace("world", "Student",$str);
  echo $new_str;
