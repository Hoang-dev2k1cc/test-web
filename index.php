<?php
  
class MyException extends Exception {}
 
try {
  throw new MyException('Oops!');
} catch (Exception $e) {
  echo "Caught Exception\n";
} catch (MyException $e) {
  echo "Caught MyException\n";
}