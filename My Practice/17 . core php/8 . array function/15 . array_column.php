<?php

$a = array(array('id' => 1234,'first_name' => 'brijesh','last_name' => 'patel'),
array('id' => 4321,'first_name' => 'Akshar','last_name' => 'radadiya'),
array('id' => 3412,'first_name' => 'anant','last_name' => 'marakana'),
array('id' => 2134,'first_name' => 'karan','last_name' => 'savaliya'));

$arr=array_column($a,"first_name");
print_r($arr);

$arr1=array_column($a,'id');
print_r($arr1);



?>