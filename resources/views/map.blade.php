<?php 

$latitudefrom = '-8.2655356';
$longitudefrom = '113.3732593';

$latitudeto = '-7.7498367';
$longitudeto = '113.6692493';

$theta = $longitudefrom - $longitudeto;
$dist = sin(deg2rad($latitudefrom)) * sin(deg2rad($latitudeto)) + cos(deg2rad($latitudefrom)) * cos(deg2rad($latitudeto)) * cos(deg2rad($theta));
$dist = acos($dist);
$dist = rad2deg($dist);
$miles = $dist * 60 * 1.1515;

echo $distance=($miles * 1.609344).' KM';

 ?>