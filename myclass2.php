<?php 
class MyClass2 {
  function __construct()
  {
    print "hello ". __CLASS__ . "\n";
  }

  function __destruct()
  {
    print "goodbye ". __CLASS__ . "\n";
  }
}
?>