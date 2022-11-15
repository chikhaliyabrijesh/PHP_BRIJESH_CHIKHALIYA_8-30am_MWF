<?php

//Numaric or Index array : $arrayname = array("value1","value2","value3");

$color = array("Red","Yellow","Blue","Green","Orange");
print_r($color);

echo "<br><br>";

//Associative array : $arrayname = array("key1"=>"value1","key2"=>"value2","key3"=>"value3");

$name = array("0"=>"Ketan","1"=>"Bhargav","2"=>"Nirav","3"=>"Parth","4"=>"Maulik");
print_r($name);

echo "<br><br>";

//Multidimentional array : $arrayname = array(("firstarry")=>array("value1","value2"),("secondarray")=>array("value1","value2"));

$arr = array(("technical")=>array("php","java","node js","asp.net","python"),("non-technical")=>array("wd","GD","SEO","DM"));
print_r($arr);

echo "<br><br>";

// Convert a JSON to array

$indst = '{
    "AN":"Andaman and Nicobar Islands",
    "AP":"Andhra Pradesh",
    "AR":"Arunachal Pradesh",
    "AS":"Assam",
    "BR":"Bihar",
    "CG":"Chandigarh",
    "CH":"Chhattisgarh",
    "DN":"Dadra and Nagar Haveli",
    "DD":"Daman and Diu",
    "DL":"Delhi",
    "GA":"Goa",
    "GJ":"Gujarat",
    "HR":"Haryana",
    "HP":"Himachal Pradesh",
    "JK":"Jammu and Kashmir",
    "JH":"Jharkhand",
    "KA":"Karnataka",
    "KL":"Kerala",
    "LA":"Ladakh",
    "LD":"Lakshadweep",
    "MP":"Madhya Pradesh",
    "MH":"Maharashtra",
    "MN":"Manipur",
    "ML":"Meghalaya",
    "MZ":"Mizoram",
    "NL":"Nagaland",
    "OR":"Odisha",
    "PY":"Puducherry",
    "PB":"Punjab",
    "RJ":"Rajasthan",
    "SK":"Sikkim",
    "TN":"Tamil Nadu",
    "TS":"Telangana",
    "TR":"Tripura",
    "UP":"Uttar Pradesh",
    "UK":"Uttarakhand",
    "WB":"West Bengal"
}';

print_r(json_decode($indst));

?>