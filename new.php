<?php
$url ='https://corona.askbhunte.com/api/v1/data/nepal';
$data = file_get_contents($url);
$characters = json_decode($data);
echo ($characters);
print_r($characters);
