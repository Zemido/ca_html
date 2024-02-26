<?php
$val = '';
while(strlen($val) < 5 || strlen($val) > 8) {
  $val = strval(rand()*1173);
}
echo 'Random value is ' . $val;
